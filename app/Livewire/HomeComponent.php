<?php

namespace App\Livewire;

use App\Models\Course;
use App\Models\Faculty;
use App\Models\Setting;
use Livewire\Component;
use App\Models\HomeSlider;

class HomeComponent extends Component
{
    public function render()
    {

        return view('livewire.home-component', [
            "slider" => HomeSlider::find(1),
            "settings" => Setting::find(1),
            "courses" => Course::all(),
            'feedbacks' => \App\Models\ClientFeedback::all(),
        ])->layout('layouts.base');
    }
}
