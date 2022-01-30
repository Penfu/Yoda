<?php

namespace App\View\Components\Activity;

use Illuminate\View\Component;

class Practice extends Component
{
    private $practice;

    public function __construct($activity)
    {
        $this->practice = $activity;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.activity.practice')->with('practice', $this->practice);
    }
}
