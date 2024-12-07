<?php

namespace App\Livewire\Admin\Admissions;

use App\Models\Admission;
use Livewire\Component;

class AdmissionApplationsComponent extends Component
{
    public function render()
    {
        $admissions = Admission::all();
        return view('livewire.admin.admissions.admission-applations-component', compact('admissions'))->layout('layouts.admin');
    }

    public function deleteAdmission($id){
        $admission = Admission::find($id);
        $admission->delete();
        session()->flash('message', 'Admission deleted successfully!');
            return redirect()->route('admin.admissions');
    }
}
