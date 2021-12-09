<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpinionFeedback extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function opinion()
    {
        return $this->belongsTo(Opinion::class);
    }

    public function scopeCommented($query)
    {
        return $query->where('comment', '<>', '');
    }
}
