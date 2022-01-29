<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProfileEditableInformations extends Component
{
    public $user;

    public function render()
    {
        return view('livewire.profile-editable-informations');
    }
}
