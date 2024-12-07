<?php

namespace App\Livewire\Admin\Client;

use Livewire\Component;
use Livewire\WithFileUploads;

class EditClientFeedbackComponent extends Component
{
    use WithFileUploads;

    public $client_name, $client_image, $client_feedback, $client_designation, $client_id, $old_image;

    public function mount($id)
    {
        $client = \App\Models\ClientFeedback::find($id);
        $this->client_name = $client->client_name;
        $this->old_image = $client->client_image;
        $this->client_feedback = $client->client_feedback;
        $this->client_designation = $client->client_designation;
        $this->client_id = $client->id;
    }

    public function updateFeedback()
    {
        $this->validate([
            'client_name' => 'required|string|max:255',
            'client_image' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif,svg|max:10000',
            'client_feedback' => 'required|string',
            'client_designation' => 'required|string|max:255',
        ]);

        $client = \App\Models\ClientFeedback::find($this->client_id);
        $client->client_name = $this->client_name;
        if($this->client_image){
            if($this->old_image){
                unlink('assets/images/client_feedback/'.$this->old_image);
            }
            $image = $this->client_image;
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->storeAs('client_feedback', $imageName);
            $client->client_image = $imageName;
        }
        $client->client_feedback = $this->client_feedback;
        $client->client_designation = $this->client_designation;

        $client->save();


        session()->flash('message', 'Client Feedback Updated Successfully');

    }

    //  render.view
    public function render()
    {
        return view('livewire.admin.client.edit-client-feedback-component')->layout('layouts.admin');
    }
}
