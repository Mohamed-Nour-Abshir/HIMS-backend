<?php

namespace App\Livewire;

use App\Models\Contact;
use App\Models\Setting;
use Livewire\Component;

class ContactComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $subject;
    public $message;

    public function updated($fillable){
        $this->validateOnly($fillable, [
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'subject'=>'required',
            'message'=>'required' 
        ]);
    }
    public function Contact(){
        $this->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'subject'=>'required',
            'message'=>'required'
        ]);

        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->phone = $this->phone;
        $contact->subject = $this->subject;
        $contact->message = $this->message;
        $contact->save();
        session()->flash('message', 'Thanks for your contact will response you soon!');
        $this->rest();
    }

    public function rest()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->subject = '';
        $this->message = '';
    }
    public function render()
    {
        $settings = Setting::find(1);
        return view('livewire.contact-component', compact('settings'))->layout('layouts.base');
    }
}
