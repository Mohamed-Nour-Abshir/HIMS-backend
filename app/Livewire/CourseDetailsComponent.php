<?php

namespace App\Livewire;

use Livewire\Component;

class CourseDetailsComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        return view('livewire.course-details-component',[
            'course' => \App\Models\Course::where('slug', $this->slug)->first(),
        ])->layout('layouts.base');
    }
}
