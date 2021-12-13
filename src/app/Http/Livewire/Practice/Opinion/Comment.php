<?php

namespace App\Http\Livewire\Practice\Opinion;

use Livewire\Component;

class Comment extends Component
{
    public $comment;

    public function render()
    {
        return view('livewire.practice.opinion.comment');
    }
}
