<?php

namespace App\Livewire;

use Livewire\Component;

class NewsComponent extends Component
{
    public function render()
    {
        return view('livewire.news-component',
        [
            'newses' => \App\Models\News::all(),
        ])->layout('layouts.base');
    }
}
