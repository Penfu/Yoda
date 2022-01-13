<?php

namespace App\Http\Livewire;

use App\Models\Reference;
use Livewire\Component;

class References extends Component
{
    protected $listeners = ['referencePosted'];

    public $references;

    public function mount()
    {
        $this->references = Reference::all();
    }

    public function referencePosted()
    {
        $this->references = Reference::all();
        session()->now('alert', 'Votre référence a bien été enregistrée.');

        $this->render();
    }
    
    public function render()
    {
        return view('livewire.references');
    }
}
