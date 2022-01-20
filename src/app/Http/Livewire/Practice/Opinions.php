<?php

namespace App\Http\Livewire\Practice;

use App\Models\Opinion;
use App\Models\Practice;
use Illuminate\Http\Request;
use Livewire\Component;

class Opinions extends Component
{
    public $practice;
    public $opinions;
    public $userOpinion;
    public $description;

    protected $listeners = ['deleteOpinion' => 'delete'];

    protected $rules = [
        'description' => 'required|string|max:5000',
    ];

    public function mount()
    {
        $this->opinions = $this->practice->opinions;
        $this->userOpinion = $this->practice->opinions->where('user_id', auth()->id())->first();
    }

    public function publishPractice(Request $request)
    {
        if ($request->user()->cannot('publish', $this->practice)) {
            abort(403);
        }

        $this->practice->publish();

        return redirect()->route('home')->with('alert', 'La pratique a bien été publiée');
    }

    /* 
        To avoids too many network requests, this wire event should be deferred or a least set as lazy update 
        The length counter should be a javascript client side solution 
    */
    public function updatedDescription()
    {
        $this->validateOnly('description');
    }

    public function post()
    {
        $validation = $this->validate();

        $this->userOpinion = $this->practice->opinions()->create([
            'description' => $validation['description'],
            'user_id'     => auth()->id(),
        ]);

        $this->opinions->push($this->userOpinion);

        session()->now('alert', 'Votre opinion a bien été enregistrée.');
    }

    public function delete(Opinion $opinion)
    {
        $opinion->delete();
        $this->opinions = $this->practice->opinions()->get();

        $this->reset('userOpinion');
        $this->reset('description');

        session()->now('alert', 'Votre opinion a bien été supprimée.');
    }

    public function render()
    {
        return view('livewire.practice.opinions');
    }
}
