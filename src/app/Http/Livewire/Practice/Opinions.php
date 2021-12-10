<?php

namespace App\Http\Livewire\Practice;

use Livewire\Component;

class Opinions extends Component
{
    public $opinions;
    
    public function render()
    {
        return view('livewire.practice.opinions');
    }
}
