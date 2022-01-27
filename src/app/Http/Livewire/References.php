<?php

namespace App\Http\Livewire;

use App\Models\Reference;
use Livewire\Component;

class References extends Component
{
    protected $listeners = ['referenceAlreadyExist', 'referencePosted'];

    public $references;

    public function mount()
    {
        $this->references = Reference::all();
    }

    public function referenceAlreadyExist()
    {
        session()->flash('alert', 'Une rérérence existe déjà avec cette URL.');
        $this->render();
    }

    public function referencePosted()
    {
        $this->references = Reference::all();
        session()->flash('success', 'Votre référence a bien été enregistrée.');
        $this->render();
    }

    public function render()
    {
        return view('livewire.references');
    }
}
