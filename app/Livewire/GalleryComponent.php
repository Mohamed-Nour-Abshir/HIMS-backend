<?php

namespace App\Livewire;

use App\Models\Gallery;
use Livewire\Component;

class GalleryComponent extends Component
{
    public function render()
    {
        $galleries = Gallery::all();
        return view('livewire.gallery-component',[
            'galleries' => $galleries
        ])->layout('layouts.base');
    }
}
