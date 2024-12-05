<?php

namespace App\Livewire\Admin\Faculty;

use Livewire\Component;

class FacultyComponent extends Component
{
    public function deleteFaculty($id)
    {
        $faculty = \App\Models\Faculty::find($id);

        if($faculty->image)
        {
            unlink('assets/images/faculty/'.$faculty->image);
        }

        $faculty->delete();

        session()->flash('message', 'Faculty deleted successfully.');
    }

    public function render()
    {
        return view('livewire.admin.faculty.faculty-component',[
            'faculties' => \App\Models\Faculty::all()
        ])->layout('layouts.admin');
    }
}
