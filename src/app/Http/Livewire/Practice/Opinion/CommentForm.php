<?php

namespace App\Http\Livewire\Practice\Opinion;

use Livewire\Component;

class CommentForm extends Component
{
    public $comment;

    public function post()
    {
        dd($this->comment);
        
        $this->validate([
            'comment' => 'required|min:3',
        ]);

        $this->emit('commentAdded', $this->comment);
        $this->comment->refresh();
    }

    public function render()
    {
        return view('livewire.practice.opinion.comment-form');
    }
}
