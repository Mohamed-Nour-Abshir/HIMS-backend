<?php

namespace App\Livewire;

use App\Models\Faculty;
use Livewire\Component;

class ManagementTeamComponent extends Component
{
    public function render()
    {
        return view('livewire.management-team-component',[
            "faculties" => Faculty::all(),
        ])->layout('layouts.base');
    }
}
