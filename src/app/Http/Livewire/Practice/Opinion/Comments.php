<?php

namespace App\Http\Livewire\Practice\Opinion;

use Livewire\Component;

class Comments extends Component
{
    public $opinion;
    public $comments;
    public $isOpen;

    protected $listeners = [
        'commentsOpened',
        'commentPosted' => 'loadComments',
        'commentDeleted' => 'loadComments',
    ];

    public function loadComments()
    {
        $this->comments = $this->opinion->comments()->with('user')->get();
    }

    /* 
        The open boolean statement is store to keep the comments open
        when a comment is posted and then the component re render.
    */
    public function open()
    {
        $this->isOpen = !$this->isOpen;
        $this->emit('commentsOpened', $this->id);
    }

    public function commentsOpened($componentId)
    {
        if ($componentId != $this->id) {
            $this->reset('isOpen');
        }
    }

    public function render()
    {
        return view('livewire.practice.opinion.comments');
    }
}
