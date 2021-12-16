<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'practice_id',
        'user_id',
    ];

    public function practice()
    {
        return $this->belongsTo(Practice::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function feedbacks()
    {
        return $this->hasMany(OpinionFeedback::class);
    }

    public function points()
    {
        return $this->feedbacks()->sum('points');
    }

    public function comments()
    {
        return $this->hasMany(OpinionComment::class);
    }

    public function references()
    {
        return $this->belongsToMany(Reference::class, 'opinion_references');
    }

}
