<?php

namespace App\Http\Livewire\Practice;

use Livewire\Component;

class Opinion extends Component
{
    public $opinion;

    public function render()
    {
        return view('livewire.practice.opinion');
    }
}
