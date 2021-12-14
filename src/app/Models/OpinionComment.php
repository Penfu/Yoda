<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpinionComment extends Model
{
    use HasFactory;

    protected $table = 'opinion_comments';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function opinion()
    {
        return $this->belongsTo(Opinion::class);
    }
}
