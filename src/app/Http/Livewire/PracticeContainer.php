<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Practice;

class PracticeContainer extends Component
{
    use WithPagination;

    protected $listeners = ['practiceDeleted'];

    public function render()
    {
        return view('livewire.practice-container', [
            'practices' => practice::paginate(6),
        ]);
    }

    public function practiceDeleted()
    {
        $this->resetPage();
    }
}
