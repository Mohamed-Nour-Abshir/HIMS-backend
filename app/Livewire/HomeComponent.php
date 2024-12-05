<?php

namespace App\Livewire;

use App\Models\HomeSlider;
use App\Models\Setting;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $slider = HomeSlider::find(1);
        $settings = Setting::find(1);
        return view('livewire.home-component', compact('slider', 'settings'))->layout('layouts.base');
    }
}
