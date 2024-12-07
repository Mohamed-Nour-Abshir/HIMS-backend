<?php

namespace App\Livewire;

use Livewire\Component;

class MissionVisionComponent extends Component
{
    public function render()
    {
        return view('livewire.mission-vision-component',[
            "mission_vision" => \App\Models\MissionVision::first(),
        ])->layout('layouts.base');
    }
}
