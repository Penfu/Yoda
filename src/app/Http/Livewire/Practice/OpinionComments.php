<?php

namespace App\Http\Livewire\Practice;

use Livewire\Component;

class OpinionComments extends Component
{
    public $comments;
    
    public function render()
    {
        return view('livewire.practice.opinion-comments');
    }
}
