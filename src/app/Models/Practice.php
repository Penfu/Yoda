<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
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

    public static function recentUpdates($days) : Builder
    {
        return Practice::where('updated_at', '>=', Carbon::now()->subDays((int)$days)->toDateTimeString());
    }

    public static function filterByPublicationState($publicationState) : Builder
    {
        return Practice::where('publication_state_id', $publicationState);
    }
}
