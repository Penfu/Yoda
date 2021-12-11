<?php

namespace App\Http\Livewire\Practice;

use Livewire\Component;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Practice;

class Practices extends Component
{
    public Collection $practices;
    public            $domain;
    public            $days;

    public function render()
    {
        $practices = Practice::published();

        if (isset($this->days)) $practices->updatedSince($this->days);
        if (isset($this->domain)) $practices->ofDomain($this->domain->slug);
        else $practices->with('domain'); // eager load domains

        $this->practices = $practices->get();

        return view('livewire.practice.practices');
    }
}
