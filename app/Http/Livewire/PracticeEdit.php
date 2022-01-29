<?php

namespace App\Http\Livewire;

use App\Models\Practice;
use Livewire\Component;

class PracticeEdit extends Component
{
    protected $rules = [
        'title'  => 'required|string|min:3|max:40',
        'reason' => 'nullable|string',
    ];

    public $practice;
    public bool $isEditing;

    public string $title;
    public string $reason;

    public function mount($practice)
    {
        $this->practice = $practice;
        $this->isEditing = false;
        $this->title = $practice->title;
        $this->reason = '';
    }

    public function openTitleEdition()
    {
        $this->isEditing = !$this->isEditing;
    }

    public function editTitle()
    {
        $validation = $this->validate();

        if (Practice::titleExist($validation['title'])) {
            $this->addError('title', 'Une pratique avec ce même titre existe déjà.');
            return;
        } else {
            $this->practice->changelogs()->create([
                'user_id'    => auth()->id(),
                'reason'     => $validation['reason'],
                'previously' => $this->practice->title,
            ]);

            $this->practice->title = $validation['title'];
            $this->practice->save();
            $this->isEditing = false;

            $this->emit('refreshChangelogs');

            session()->flash('alert', 'Le titre de la pratique a bien était mis à jour.');
        }
    }

    public function render()
    {
        return view('livewire.practice-edit');
    }
}
