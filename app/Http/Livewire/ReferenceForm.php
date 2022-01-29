<?php

namespace App\Http\Livewire;

use App\Models\Reference;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ReferenceForm extends Component
{
    public $title;
    public $url;

    protected $rules = [
        'title' => 'required|string|min:10|max:1000',
        'url'   => 'required|string|url|max:500',
    ];

    public function post()
    {
        $validation = $this->validate();

        if (Reference::byUrl($validation['url'])->get()->isNotEmpty()) {
            return $this->emit('referenceAlreadyExist');
        } else {
            $reference = Reference::make([
                'title'   => $validation['title'],
                'url'     => $validation['url'],
            ]);

            $reference->author()->associate(Auth::user());
            $reference->save();
        }

        $this->emit('referencePosted');
        $this->reset('title', 'url');
    }

    public function render()
    {
        return view('livewire.reference-form');
    }
}
