<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\BestPractice;

class BestPracticeCard extends Component
{
    public BestPractice $bestPractice;

    public function render()
    {
        return view('livewire.best-practice-card');
    }

    public function delete()
    {
        $this->bestPractice->delete();
        $this->emit('bestPracticeDeleted');
    }
}
