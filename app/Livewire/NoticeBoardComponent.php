<?php

namespace App\Livewire;

use Livewire\Component;

class NoticeBoardComponent extends Component
{
    public function render()
    {
        return view('livewire.notice-board-component')->layout('layouts.base');
    }
}
