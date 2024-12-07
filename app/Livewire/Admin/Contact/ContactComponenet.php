<?php

namespace App\Livewire\Admin\Contact;

use App\Models\Contact;
use Livewire\Component;

class ContactComponenet extends Component
{
    public function render()
    {
        $contacts = Contact::all();
        return view('livewire.admin.contact.contact-componenet', compact('contacts'))->layout('layouts.admin');
    }
}
