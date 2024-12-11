<?php

namespace App\Livewire;

use App\Models\Admission;
use App\Models\Course;
use App\Models\Faculty;
use App\Models\Setting;
use Livewire\Component;
use App\Models\HomeSlider;
use App\Models\Partner;

class HomeComponent extends Component
{
    public $full_name;
    public $email;
    public $phone;
    public $address;
    public $course_name;
    public $dob;
    public $additional_info;
    public $bmdc_reg_no;

    public function updated($fillable){
        $this->validateOnly($fillable, [
            'full_name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'course_name'=>'required',
            'dob'=>'required',
            'bmdc_reg_no'=>'required',
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
            'bmdc_reg_no'=>'required',
        ]);

        $admission = new Admission();
        $admission->full_name = $this->full_name;
        $admission->email = $this->email;
        $admission->phone = $this->phone;
        $admission->address = $this->address;
        $admission->course_name = $this->course_name;
        $admission->dob = $this->dob;
        $admission->additional_info = $this->additional_info;
        $admission->bmdc_reg_no = $this->bmdc_reg_no;

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
        $this->bmdc_reg_no = '';
    }
    public function render()
    {

        return view('livewire.home-component', [
            "slider" => HomeSlider::find(1),
            "settings" => Setting::find(1),
            "courses" => Course::all(),
            "partners" => Partner::all(),
            'feedbacks' => \App\Models\ClientFeedback::all(),
        ])->layout('layouts.base');
    }
}
