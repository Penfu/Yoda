<?php

namespace App\Http\Livewire\Practice;

use App\Models\Practice;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class PracticeContainer extends Component
{
    public Collection $practices;
    public $domain;
    public $days;

    public function render()
    {
        $practices = Practice::wherePublicationState('PUB');

        if (isset($this->days)) {
            $practices = Practice::updatedSince($this->days, $practices);
        }
        if (isset($this->domain)) {
            $practices = Practice::whereDomain($this->domain->slug, $practices);
        }

        $this->practices = $practices->get();
        return view('livewire.practice.practice-container');
    }
}
