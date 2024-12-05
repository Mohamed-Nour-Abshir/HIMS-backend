<?php

namespace App\Livewire;

use App\Models\Course;
use Livewire\Component;

class CoursesComponent extends Component
{
    public function render()
    {
        $courses = Course::all();
        return view('livewire.courses-component',[
            'courses' => $courses
        ])->layout('layouts.base');
    }
}
