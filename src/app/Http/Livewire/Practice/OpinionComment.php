<?php

namespace App\Http\Livewire\Practice;

use Livewire\Component;

class OpinionComment extends Component
{
    public $comment;

    public function render()
    {
        return view('livewire.practice.opinion-comment');
    }
}
