<?php

namespace App\Http\Livewire\Practice;

use App\Models\Practice;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class PracticeContainer extends Component
{
    public Collection $practices;
    public $domain;
    public $days;

    public function render()
    {
        $practices = Practice::whereHas(
            'publicationState',
            fn ($publicationState) => $publicationState->where('slug', 'PUB')
        );

        if (isset($this->days)) {
            $practices = $practices->where('updated_at', '>=', Carbon::now()->subDays((int)$this->days)->toDateTimeString());
        }
        if (isset($this->domain)) {
            $practices = $practices->whereHas(
                'domain',
                fn ($query) => $query->where('slug', $this->domain->slug)
            );
        }

        $this->practices = $practices->get();
        return view('livewire.practice.practice-container');
    }
}
