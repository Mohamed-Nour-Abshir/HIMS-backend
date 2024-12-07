<?php

namespace App\Livewire\Admin\Partner;

use App\Models\Partner;
use Livewire\Component;

class PartnerComponent extends Component
{
    public function render()
    {
        $partners = Partner::all();
        return view('livewire.admin.partner.partner-component', compact('partners'))->layout('layouts.admin');
    }

    public function deletePartner($id){
        $partner = Partner::find($id);
        $partner->delete();
        session()->flash('message', 'Partner deleted successfully!');
        return redirect()->route('partners');
    }
}
