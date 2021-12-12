<?php

namespace App\Http\Livewire\Practice;

use App\Models\Opinion;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Opinions extends Component
{
    public $practice;
    public $opinions;
    public $userOpinion;
    public $description;

    protected $listeners = ['delete'];

    protected $rules = [
        'description' => 'required|string|max:5000',
    ];

    public function mount($practice)
    {
        $this->opinions = $practice->opinions;
        $this->userOpinion = $practice->opinions->where('user_id', Auth::id())->first();
    }

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function post()
    {
        $validated = $this->validate();

        $this->userOpinion = $this->practice->opinions()->create([
            'description' => $validated['description'],
            'user_id' => auth()->user()->id,
        ]);
        $this->opinions = $this->practice->opinions()->get();

        session()->now('alert', 'Votre opinion a bien été enregistrée.');
    }

    public function delete(Opinion $opinion)
    {
        $opinion->delete();

        $this->opinions = $this->practice->opinions()->get();
        unset($this->userOpinion);
        unset($this->description);

        session()->now('alert', 'Votre opinion a bien été supprimée.');
    }

    public function render()
    {
        return view('livewire.practice.opinions');
    }
}
