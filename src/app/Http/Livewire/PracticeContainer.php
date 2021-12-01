<?php

namespace App\Http\Livewire;

use App\Models\Domain;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Practice;
use App\Models\PublicationState;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

class PracticeContainer extends Component
{
    use WithPagination;

    const PER_PAGE = 6;

    public $lastupdate;
    public $domain;
    public $state;



    public function render()
    {
        $practices = Practice::query();

        if (isset($this->lastupdate)) {
            $practices = Practice::recentUpdates($this->lastupdate);
        }
        if (isset($this->domain)) {
            $practices = $practices->whereHas('domain', fn ($query) =>
            $query->where('slug', $this->domain->slug));
        }
        if (isset($this->state)) {
            $practices = $practices->where('publication_state_id', PublicationState::where('slug', $this->state)->pluck('id'));
        }

        return view('livewire.practice-container', [
            'practices' => $practices->paginate(self::PER_PAGE)
        ]);
    }
}
