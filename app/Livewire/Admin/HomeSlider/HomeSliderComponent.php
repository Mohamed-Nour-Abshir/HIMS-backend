<?php

namespace App\Livewire\Admin\HomeSlider;

use App\Models\HomeSlider;
use Livewire\Component;

class HomeSliderComponent extends Component
{
    public function render()
    {
        $slider = HomeSlider::find(1);
        return view('livewire.admin.home-slider.home-slider-component', compact('slider'))->layout('layouts.admin');
    }
}
