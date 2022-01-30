<?php

namespace App\View\Components\Activity;

use Illuminate\View\Component;

class OpinionComment extends Component
{
    private $comment;

    public function __construct($activity)
    {
        $this->comment = $activity;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.activity.opinion-comment')->with('comment', $this->comment);
    }
}
