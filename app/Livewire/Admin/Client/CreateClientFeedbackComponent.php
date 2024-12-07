<?php

namespace App\Livewire\Admin\Client;

use Livewire\Component;
use Livewire\WithFileUploads;

class CreateClientFeedbackComponent extends Component
{
    use WithFileUploads;

    public $client_name, $client_image, $client_feedback, $client_designation;

    public function createFeedback()
    {
        $this->validate([
            'client_name' => 'required|string|max:255',
            'client_image' => 'required|image|mimes:jpeg,png,jpg,webp,gif,svg|max:10000',
            'client_feedback' => 'required|string',
            'client_designation' => 'required|string|max:255',
        ]);

        $feedback = new \App\Models\ClientFeedback();
        $feedback->client_name = $this->client_name;
        if($this->client_image){
            $image = $this->client_image;
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->storeAs('client_feedback', $imageName);
            $feedback->client_image = $imageName;
        }
        $feedback->client_feedback = $this->client_feedback;
        $feedback->client_designation = $this->client_designation;

        $this->reset(['client_name', 'client_image', 'client_feedback', 'client_designation']);

        $feedback->save();

        session()->flash('success', 'Client Feedback Created Successfully');
    }

    //  render.view
    public function render()
    {
        return view('livewire.admin.client.create-client-feedback-component')->layout('layouts.admin');
    }
}
