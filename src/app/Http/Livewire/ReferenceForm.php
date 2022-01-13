<?php

namespace App\Http\Livewire;

use App\Models\Reference;
use Livewire\Component;

class ReferenceForm extends Component
{
    public $title;
    public $url;

    protected $rules = [
        'title' => 'required|string|min:10|max:1000',
        'url'   => 'nullable|string|max:1000',
    ];

    public function post()
    {
        $validation = $this->validate();

        Reference::create([
            'title'   => $validation['title'],
            'url'     => $validation['url'],
            'user_id' => auth()->id(),
        ]);

        $this->emit('referencePosted');
        $this->reset('title', 'url');
    }

    public function render()
    {
        return view('livewire.reference-form');
    }
}