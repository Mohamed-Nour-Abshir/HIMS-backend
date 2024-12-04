<?php

namespace App\Livewire\Admin\Course;

use App\Models\Course;
use Livewire\Component;

class CourseComponent extends Component
{
    public function render()
    {
        $courses = Course::all();
        return view('livewire.admin.course.course-component',[
            'courses' => $courses,
        ])->layout('layouts.admin');
    }
}
