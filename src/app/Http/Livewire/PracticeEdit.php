<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PracticeEdit extends Component
{
    public $practice;
    public bool $isEditing;

    public function mount($practice)
    {
        $this->practice = $practice;
        $this->isEditing = false;
    }

    public function openTitleEdition()
    {
        $this->isEditing = !$this->isEditing;
    }

    public function render()
    {
        return view('livewire.practice-edit');
    }
}
