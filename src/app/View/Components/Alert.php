<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    private string $message;
    private int $delay; // in seconds

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $message, int $delay = 0)
    {
        $this->message = $message;
        $this->delay = $delay;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert')->with([
            'message' => $this->message,
            'delay' => $this->delay,
        ]);
    }
}
