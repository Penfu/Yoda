<?php

namespace App\Http\Livewire\Practice;

use App\Models\Practice;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class PracticeContainer extends Component
{
    public Collection $practices;
    public $domain;
    public $days;

    public function render()
    {
        $practices = Practice::published();

        if (isset($this->days)) $practices->updatedSince($this->days);
        if (isset($this->domain)) $practices->ofDomain($this->domain->slug);

        $this->practices = $practices->get();
        return view('livewire.practice.practice-container');
    }
}
