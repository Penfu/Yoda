<?php

namespace App\Http\Livewire\Practice\Opinion;

use Livewire\Component;

class Comment extends Component
{
    public $comment;

    public function delete()
    {
        $this->comment->delete();
        $this->emit('commentDeleted');
    }

    public function render()
    {
        return view('livewire.practice.opinion.comment');
    }
}
