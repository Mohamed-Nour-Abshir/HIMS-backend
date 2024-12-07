<?php

namespace App\Livewire\Admin\Partner;

use App\Models\Partner;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Livewire\Component;

class EditPartnerComponent extends Component
{
    use WithFileUploads;
    public $image;
    public $image_alt;
    public $newImage;
    public $partner_id;

    public function mount($id){
        $partner = Partner::find($id);
        $this->image_alt = $partner->alt;
        $this->image = $partner->image;
        $this->partner_id = $partner->id;

    }
    
    public function updated($fillable){
        $this->validateOnly($fillable,[
            'image_alt'=>'required',
            'image'=>'required',
        ]);
    }

    public function updatePartner(){
        $this->validate([
            'image_alt'=>'required',
            'image'=>'required',
        ]);
        $partner = Partner::find($this->partner_id);
        $partner->alt = $this->image_alt;

        if($this->newImage){
            $imagename = Carbon::now()->timestamp.'.'.$this->newImage->extension();
            $this->newImage->storeAs('partners', $imagename);
            $partner->image = $imagename;
        }

        $partner->save();
        session()->flash('message', 'Partner updated successfully!');
        return redirect()->route('partners');
    }
    public function render()
    {
        return view('livewire.admin.partner.edit-partner-component')->layout('layouts.admin');
    }
}
