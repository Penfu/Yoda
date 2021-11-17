<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\BestPractice;

class BestPracticeContainer extends Component
{
    public $bestPractices;
    protected $listeners = ['bestPracticeDeleted'];

    public function render()
    {
        return view('livewire.best-practice-container');
    }

    public function bestPracticeDeleted()
    {
        $this->bestPractices = BestPractice::all();
    }
}
