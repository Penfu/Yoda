<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpinionFeedback extends Model
{
    use HasFactory;

    protected $table = 'opinion_feedbacks';
    protected $fillable = [
        'opinion_id',
        'user_id',
        'points',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function opinion()
    {
        return $this->belongsTo(Opinion::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
