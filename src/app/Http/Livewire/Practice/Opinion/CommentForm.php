<?php

namespace App\Http\Livewire\Practice\Opinion;

use Livewire\Component;

class CommentForm extends Component
{
    public $opinion;
    public $comment;

    protected $rules = [
        'comment' => 'required|string|max:1000',
    ];

    public function post()
    {
        $validation = $this->validate([
            'comment' => 'required|string|max:1000',
        ]);

        $this->opinion->comments()->create([
            'user_id' => auth()->id(),
            'comment' => $validation['comment'],
        ]);

        $this->emit('commentPosted');
        $this->reset('comment');
    }

    public function render()
    {
        return view('livewire.practice.opinion.comment-form');
    }
}
