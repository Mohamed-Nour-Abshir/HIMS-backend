<?php

namespace App\Livewire;

use Livewire\Component;

class TeachersComponent extends Component
{
    public function render()
    {
        return view('livewire.teachers-component',[
            "teachers" => \App\Models\Faculty::all()
        ])->layout('layouts.base');
    }
}
