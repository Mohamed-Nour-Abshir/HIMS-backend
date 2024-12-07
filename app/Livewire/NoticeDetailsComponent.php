<?php

namespace App\Livewire;

use Livewire\Component;

class NoticeDetailsComponent extends Component
{
    public $slug;
    public function mount($slug)
    {
        $this->slug = $slug;
    }
    
    public function render()
    {
        return view('livewire.notice-details-component',[
            'notice' => \App\Models\Notice::where('slug', $this->slug)->first()
        ])->layout('layouts.base');
    }
}
