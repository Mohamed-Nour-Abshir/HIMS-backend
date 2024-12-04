<?php

namespace App\Livewire;

use App\Models\Setting;
use Livewire\Component;

class ContactComponent extends Component
{
    public function render()
    {
        $settings = Setting::find(1);
        return view('livewire.contact-component', compact('settings'))->layout('layouts.base');
    }
}
