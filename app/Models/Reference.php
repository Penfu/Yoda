<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'url',
        'user_id',
    ];

    public function opinions()
    {
        return $this->belongsToMany(Opinion::class, 'opinion_references');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeByUrl($query, $url)
    {
        return $query->where('url', $url);
    }
}
