<?php

namespace App\View\Components\Activity;

use Illuminate\View\Component;

class OpinionFeedback extends Component
{
    private $feedback;

    public function __construct($activity)
    {
        $this->feedback = $activity;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.activity.opinion-feedback')->with('feedback', $this->feedback);
    }
}
