<?php

namespace App\Http\Livewire\Practice;

use Livewire\Component;
use App\Models\Practice;

class PracticeCard extends Component
{
    public Practice $practice;

    public function render()
    {
        return view('livewire.practice.practice-card');
    }
}
