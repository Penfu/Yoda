<?php

namespace App\Http\Livewire\Practice;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Opinion extends Component
{
    public $opinion;
    public $points;
    public $userFeedback;
    public $vote;

    public function mount()
    {
        $this->points = $this->opinion->points();
        $this->vote   = $this->opinion->feedbacks->where('user_id', auth()->id())->first()->points ?? 0;
    }

    public function upVote()
    {
        $this->updatePoints(1);
    }

    public function unVote()
    {
        $this->updatePoints(0);
    }

    public function downVote()
    {
        $this->updatePoints(-1);
    }

    private function updatePoints($points)
    {
        if (Auth::check()) {
            $this->opinion->feedbacks()->updateOrCreate(
                ['user_id' => auth()->id()],
                ['points'  => $points]
            );

            $this->vote    = $points;
            $this->opinion = $this->opinion->refresh();
            $this->points  = $this->opinion->points();
            $this->render();
        } else {
            redirect()->route('login');
        }
    }

    public function delete()
    {
        $this->emitTo('practice.opinions', 'deleteOpinion', $this->opinion);
    }

    public function render()
    {
        return view('livewire.practice.opinion');
    }
}
