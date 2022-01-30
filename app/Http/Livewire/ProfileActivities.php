<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProfileActivities extends Component
{
    public $user;
    public $activities;
    public int $limit = 10;

    public function mount()
    {
        $this->activities = $this->user->activities();
    }

    public function render()
    {
        return view('livewire.profile-activities');
    }
}
