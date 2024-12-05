<?php

namespace App\Livewire;

use App\Models\Course;
use App\Models\Setting;
use Livewire\Component;
use App\Models\HomeSlider;

class HomeComponent extends Component
{
    public function render()
    {
        $slider = HomeSlider::find(1);
        $settings = Setting::find(1);
        $courses = Course::all();
        return view('livewire.home-component', compact('slider', 'settings', 'courses'))->layout('layouts.base');
    }
}
