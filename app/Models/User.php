<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'fullname',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public static function defaultRoleId(): int
    {
        return Role::whereSlug('MBR')->firstOrFail()->id;
    }

    public function practices()
    {
        return $this->hasMany(Practice::class);
    }

    public function opinions()
    {
        return $this->hasMany(Opinion::class);
    }

    public function opinionsFeedbacks()
    {
        return $this->hasMany(OpinionFeedback::class);
    }

    public function opinionsComments()
    {
        return $this->hasMany(OpinionComment::class);
    }

    public function references()
    {
        return $this->hasMany(Reference::class);
    }

    public function activities()
    {
        $activities = $this->practices()->published()->get()
            ->merge($this->opinions()->get())
            ->merge($this->opinionsFeedbacks()->get())
            ->merge($this->opinionsComments()->get())
            ->merge($this->references()->get());

        return $activities->sortByDesc('created_at')->values()->all();
    }

    public function isModerator(): bool
    {
        return $this->role->slug === 'MOD';
    }
}
