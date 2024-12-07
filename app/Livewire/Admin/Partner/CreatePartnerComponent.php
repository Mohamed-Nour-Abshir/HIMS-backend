<?php

namespace App\Livewire\Admin\Partner;

use App\Models\Partner;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Livewire\Component;

class CreatePartnerComponent extends Component
{
    use WithFileUploads;
    public $image;
    public $image_alt;
    
    public function updated($fillable){
        $this->validateOnly($fillable,[
            'image_alt'=>'required',
            'image'=>'required',
        ]);
    }

    public function createPartner(){
        $this->validate([
            'image_alt'=>'required',
            'image'=>'required',
        ]);
        $partner = new Partner();
        $partner->alt = $this->image_alt;

        $imagename = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('partners', $imagename);
        $partner->image = $imagename;

        $partner->save();
        session()->flash('message', 'Partner Added successfully!');
        return redirect()->route('partners');
    }
    public function render()
    {
        return view('livewire.admin.partner.create-partner-component')->layout('layouts.admin');
    }
}
