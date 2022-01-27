<?php

namespace App\Http\Livewire\Practice;

use Livewire\Component;

class Changelogs extends Component
{
    protected $listeners = ['refreshChangelogs'];

    public $practice;
    public $changelogs;

    public function mount($practice)
    {
        $this->practice = $practice;
        $this->changelogs = $practice->changelogs;
    }

    public function refreshChangelogs()
    {
        $this->changelogs = $this->practice->changelogs;
    }

    public function render()
    {
        return view('livewire.practice.changelogs');
    }
}
