<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Practice;
use App\Models\PublicationState;
use Carbon\Carbon;

class PracticeContainer extends Component
{
    use WithPagination;

    const UPDATED_FROM = 5;
    const PER_PAGE = 6;

    public $fitlerValue = self::UPDATED_FROM;

    public function render()
    {
        return view('livewire.practice-container', [
            'practices' => Practice::recentUpdates($this->fitlerValue)
                ->where('publication_state_id', PublicationState::where('slug', 'PUB')->pluck('id'))->paginate(self::PER_PAGE),
        ]);
    }
}
