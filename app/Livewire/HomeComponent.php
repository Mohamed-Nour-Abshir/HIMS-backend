<?php

namespace App\Livewire;

use App\Models\HomeSlider;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $slider = HomeSlider::find(1);
        return view('livewire.home-component', compact('slider'))->layout('layouts.base');
    }
}
