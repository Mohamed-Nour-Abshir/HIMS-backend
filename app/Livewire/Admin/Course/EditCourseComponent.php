<?php

namespace App\Livewire\Admin\Course;

use Carbon\Carbon;
use App\Models\Course;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class EditCourseComponent extends Component
{
    use WithFileUploads;

    public $course_name, $slug, $oldimage, $course_modules, $duration, $lectures, $hours;
    public $department, $regular_price, $discount_price, $description, $status, $image;
    public $course_id,$trainers;

    public function mount($id){
        $this->course_id = $id;
        $course = Course::find($id);
        $this->course_name = $course->course_name;
        $this->slug = $course->slug;
        $this->oldimage = $course->image;
        $this->course_modules = $course->course_modules;
        $this->duration = $course->duration;
        $this->lectures = $course->lectures;
        $this->hours = $course->hours;
        $this->department = $course->department;
        $this->regular_price = $course->regular_price;
        $this->discount_price = $course->discount_price;
        $this->description = $course->description;
        $this->status = $course->status;
        $this->trainers = json_decode($course->trainers);
    }

    public function updateCourse()
    {
        // dd($this->all());
        $this->validate([
            'course_name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'course_modules' => 'required|string',
            'duration' => 'required|string',
            'lectures' => 'required|integer',
            'hours' => 'required|integer',
            'department' => 'required|string',
            'regular_price' => 'required|numeric',
            'discount_price' => 'nullable|numeric',
            'description' => 'nullable|string',
            'status' => 'nullable|in:Active,Inactive',
            'trainers' => 'required|array|min:1',
        ]);

        try {
            $course = Course::find($this->course_id);
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
            $course->trainers = json_encode($this->trainers);

            if ($this->image) {
                if($this->oldimage){
                    unlink('assets/images/courses/'.$this->oldimage);
                }
                $imageName = Carbon::now()->timestamp . '.' . $this->image->getClientOriginalExtension();
                $this->image->storeAs('courses', $imageName);
                $course->image = $imageName;
            }

            $course->update();


            session()->flash('message', 'Course updated successfully!');
            return redirect()->route('admin.course');

        } catch (\Exception $e) {
            session()->flash('error', 'Error: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.admin.course.edit-course-component')->layout('layouts.admin');
    }
}
