<?php

namespace App\Livewire\Admin\Faculty;

use Livewire\Component;
use Illuminate\Support\Str;

class EditFacultyComponent extends Component
{

    public $faculty_id, $name, $designation, $image, $oldimage;

    public function mount($id)
    {
        $this->faculty_id = $id;

        $faculty = \App\Models\Faculty::find($id);
        $this->name = $faculty->name;
        $this->designation = $faculty->designation;
        $this->oldimage = $faculty->image;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    }

    public function updateFaculty()
    {

        $this->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // dd($this->all());

        $faculty = \App\Models\Faculty::find($this->faculty_id);
        $faculty->name = $this->name;
        $faculty->slug = Str::slug($this->name);
        $faculty->designation = $this->designation;
        if($this->image)
        {
            if($this->oldimage != null)
            {
                unlink('assets/images/faculty/'.$this->oldimage);
            }

            $img_name = now()->timestamp.'.'.$this->image->extension();
            $this->image->storeAs('faculty', $img_name);

            $faculty->image = $img_name;
        }

        $faculty->update();

        session()->flash('message','Faculty Updated Successfully');
        return redirect()->route('admin.faculty');
    }

    public function render()
    {
        return view('livewire.admin.faculty.edit-faculty-component')->layout('layouts.admin');
    }
}
