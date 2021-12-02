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

    public static function updatedSince($days, $query = null)
    {
        $query = $query ?? self::query();
        return $query->where('updated_at', '>=', Carbon::now()->subDays((int)$days)->toDateTimeString());
    }

    public static function wherePublicationState($state, $query = null)
    {
        $query = $query ?? self::query();
        return $query->whereHas(
            'publicationState',
            fn ($q) => $q->where('slug', $state)
        );
    }

    public static function whereDomain($domain, $query = null)
    {
        $query = $query ?? self::query();
        return $query->whereHas(
            'domain',
            fn ($q) => $q->where('slug', $domain)
        );
    }

    public function isPublished()
    {
        return $this->publicationState->slug == 'PUB' ? true : false;
    }
}
