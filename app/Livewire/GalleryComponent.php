<?php

namespace App\Livewire;

use Livewire\Component;

class GalleryComponent extends Component
{
    public function render()
    {
        return view('livewire.gallery-component')->layout('layouts.base');
    }
}
