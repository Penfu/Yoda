<?php

namespace App\Models;

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

    /*
    public static function updatedSince($days, $query = null): Builder
    {
        return isset($query)
            ? $query->where('updated_at', '>=', Carbon::now()->subDays((int)$days)->toDateTimeString())
            : Practice::where('updated_at', '>=', Carbon::now()->subDays((int)$days)->toDateTimeString());
    }

    public static function wherePublicationState($state, $query = null): Builder
    {
        return isset($query)
        ? $query::whereHas(
            'publicationState',
            fn ($publicationState) => $publicationState->where('slug', $state)
        )
        : Practice::whereHas(
            'publicationState',
            fn ($publicationState) => $publicationState->where('slug', $state)
        );
    }
    */
}
