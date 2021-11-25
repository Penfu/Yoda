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

    public function publicationSate()
    {
        return $this->belongsTo(PublicationState::class);
    }

    public static function recentUpdates($days)
    {
        return Practice::where('updated_at', '>=', Carbon::now()->subDays((int)$days)->toDateTimeString());
    }
}
