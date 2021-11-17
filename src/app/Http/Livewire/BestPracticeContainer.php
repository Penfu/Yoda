<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\BestPractice;

class BestPracticeContainer extends Component
{
    use WithPagination;

    protected $listeners = ['bestPracticeDeleted'];

    public function render()
    {
        return view('livewire.best-practice-container', [
            'bestPractices' => BestPractice::paginate(6),
        ]);
    }

    public function bestPracticeDeleted()
    {
        $this->resetPage();
    }
}
