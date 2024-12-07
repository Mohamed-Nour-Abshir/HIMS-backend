<?php

namespace App\Livewire\Admin\Course;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Course;

class CreateCourseComponent extends Component
{
    use WithFileUploads;

    public $course_name, $slug, $image, $course_modules, $duration, $lectures, $hours;
    public $department, $regular_price, $discount_price, $description, $status='Active';



    public function createCourse()
    {
        // dd($this->all());
        $this->validate([
            'course_name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'course_modules' => 'required|string',
            'duration' => 'required|string',
            'lectures' => 'required|integer',
            'hours' => 'required|integer',
            'department' => 'required|string',
            'regular_price' => 'required|numeric',
            'discount_price' => 'nullable|numeric',
            'description' => 'nullable|string',
            'status' => 'nullable|in:Active,Inactive',
        ]);

        try {
            $course = new Course();
            $course->course_name = $this->course_name;
            $course->slug = Str::slug($this->course_name);
            $course->course_modules = $this->course_modules;
            $course->duration = $this->duration;
            $course->lectures = $this->lectures;
            $course->hours = $this->hours;
            $course->department = $this->department;
            $course->regular_price = $this->regular_price;
            $course->discount_price = $this->discount_price;
            $course->description = $this->description;
            $course->status = $this->status;

            if ($this->image) {
                $imageName = Carbon::now()->timestamp . '.' . $this->image->getClientOriginalExtension();
                $this->image->storeAs('courses', $imageName);
                $course->image = $imageName;
            }

            $course->save();

            $this->resetExcept('status');
            session()->flash('message', 'Course created successfully!');
            return redirect()->route('admin.course');
        } catch (\Exception $e) {
            session()->flash('error', 'Error: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.admin.course.create-course-component')->layout('layouts.admin');
    }
}
