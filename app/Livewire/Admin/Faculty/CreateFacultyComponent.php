<?php

namespace App\Livewire\Admin\Faculty;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class CreateFacultyComponent extends Component
{
    use WithFileUploads;

    public $name,$designation,$image;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => ['required', 'string', 'max:255'],
            'designation' => ['required', 'string', 'max:255'],
            'image' => ['required', 'mimes:jpg,jpeg,png,webp,gif,svg', 'max:5000'],
        ]);
    }

    public function createFaculty()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'designation' => ['required', 'string', 'max:255'],
            'image' => ['required', 'mimes:jpg,jpeg,png,webp,gif,svg', 'max:5000'],
        ]);

        $faculty = new \App\Models\Faculty();
        $faculty->name = $this->name;
        $faculty->slug = Str::slug($this->name);
        $faculty->designation = $this->designation;
        if($this->image)
        {
            $img_name = now()->timestamp.'.'.$this->image->extension();
            $this->image->storeAs('faculty', $img_name);
            $faculty->image = $img_name;
        }

        $faculty->save();

        $this->reset(['name','designation','image']);

        session()->flash('success','Faculty Created Successfully');
    }

    //  render.view
    public function render()
    {
        return view('livewire.admin.faculty.create-faculty-component')->layout('layouts.admin');
    }
}
