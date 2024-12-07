<?php

namespace App\Livewire;

use App\Models\Admission;
use App\Models\Course;
use Livewire\Component;

class ApplyCourseComponent extends Component
{
    public $full_name;
    public $email;
    public $phone;
    public $address;
    public $course_name;
    public $dob;
    public $additional_info;

    public function updated($fillable){
        $this->validateOnly($fillable, [
            'full_name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'course_name'=>'required',
            'dob'=>'required',
            
        ]);
    }

    public function applyNow(){
        $this->validate([
            'full_name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'course_name'=>'required',
            'dob'=>'required',
            
        ]);

        $admission = new Admission();
        $admission->full_name = $this->full_name;
        $admission->email = $this->email;
        $admission->phone = $this->phone;
        $admission->address = $this->address;
        $admission->course_name = $this->course_name;
        $admission->dob = $this->dob;
        $admission->additional_info = $this->additional_info;

        $admission->save();
        session()->flash('message', 'Thanks for your application will contact you soon!');
        $this->rest();
    }
    public function rest()
    {
        $this->full_name = '';
        $this->email = '';
        $this->phone = '';
        $this->address = '';
        $this->course_name = '';
        $this->dob = '';
        $this->additional_info = '';
    }
    public function render()
    {
        $courses = Course::all();
        return view('livewire.apply-course-component', compact('courses'))->layout('layouts.base');
    }
}
