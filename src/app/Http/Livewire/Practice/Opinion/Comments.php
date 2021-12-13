<?php

namespace App\Http\Livewire\Practice\Opinion;

use Livewire\Component;

class Comments extends Component
{
    public $comments;

    public function render()
    {
        return view('livewire.practice.opinion.comments');
    }
}
