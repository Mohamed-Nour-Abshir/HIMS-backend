<?php

namespace App\Livewire;

use App\Models\Course;
use App\Models\Faculty;
use Livewire\Component;

class CoursesComponent extends Component
{
    public function render()
    {
        $courses = Course::all();
        return view('livewire.courses-component',[
            'courses' => $courses,
            'faculties' => Faculty::all()
        ])->layout('layouts.base');
    }
}
