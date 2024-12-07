<?php

namespace App\Livewire;

use Livewire\Component;

class NewsDetailsComponent extends Component
{

    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        return view('livewire.news-details-component',
        [
            'news' => \App\Models\News::where('slug', $this->slug)->first()
        ])->layout('layouts.base');
    }
}
