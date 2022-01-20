<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    use HasFactory;

    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }

    public function publicationState()
    {
        return $this->belongsTo(publicationState::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function opinions()
    {
        return $this->hasMany(Opinion::class);
    }

    public function opinionOf(User $user): ?Opinion
    {
        return $this->opinions()->where('user_id', $user->id)->first();
    }

    public function scopeUpdatedSince($query, string $days)
    {
        return $query->where('updated_at', '>=', Carbon::now()->subDays((int)$days)->toDateTimeString());
    }

    public function scopeOfDomain($query, string $domain)
    {
        return $query->whereHas('domain', fn ($q) => $q->where('slug', $domain));
    }

    public function scopePublished($query)
    {
        return $query->whereHas('publicationState', fn ($q) => $q->where('slug', 'PUB'));
    }

    public function publish()
    {
        $this->publicationState()->associate(PublicationState::where('slug', 'PUB')->first());
        $this->save();
    }

    public function isPublished(): bool
    {
        return $this->publicationState->slug == 'PUB';
    }

    public function isProposed(): bool
    {
        return $this->publicationState->slug == 'PRO';
    }
}
