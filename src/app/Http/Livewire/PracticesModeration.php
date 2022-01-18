<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Practice;

class PracticesModeration extends Component
{
    public $domains;
    public int $practicesCount;

    public function mount()
    {
        $practices = Practice::with('domain', 'publicationState')
            ->orderBy('publication_state_id')->get();

        $this->domains = $practices->groupBy(fn ($practice) => $practice->domain->id)->toBase();
        $this->practicesCount = $this->domains->sum(fn ($practice) => $practice->count());
    }

    public function render()
    {
        return view('livewire.practices-moderation');
    }
}
