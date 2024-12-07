<?php

namespace App\Livewire\Admin\Client;

use Livewire\Component;

class ClientFeedbackComponent extends Component
{
    public function destroyFeedback($id)
    {
        $feedback = \App\Models\ClientFeedback::find($id);

        if($feedback->client_image){
            unlink('assets/images/client_feedback/'.$feedback->client_image);
        }

        $feedback->delete();

        session()->flash('message', 'Feedback deleted successfully');
    }


    //  render.view
    public function render()
    {
        return view('livewire.admin.client.client-feedback-component',[
            'feedbacks' => \App\Models\ClientFeedback::all()
        ])->layout('layouts.admin');
    }
}
