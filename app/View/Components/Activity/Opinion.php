<?php

namespace App\View\Components\Activity;

use Illuminate\View\Component;

class Opinion extends Component
{
    private $opinion;

    public function __construct($activity)
    {
        $this->opinion = $activity;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.activity.opinion')->with('opinion', $this->opinion);
    }
}
