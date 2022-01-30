<?php

namespace App\View\Components\Activity;

use Illuminate\View\Component;

class Reference extends Component
{
    private $reference;

    public function __construct($activity)
    {
        $this->reference = $activity;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.activity.reference')->with('reference', $this->reference);
    }
}
