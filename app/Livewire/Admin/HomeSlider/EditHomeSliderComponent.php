<?php

namespace App\Livewire\Admin\HomeSlider;

use App\Models\HomeSlider;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditHomeSliderComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $sub_title;
    public $description;
    public $image;
    public $newImage;
    public $slider_id;

    public function mount($id){
        $slider = HomeSlider::find($id);
        $this->title = $slider->title;
        $this->sub_title = $slider->sub_title;
        $this->description = $slider->description;
        $this->image = $slider->image;
        $this->slider_id = $slider->id;
    }

    public function Update(){
        $slider = HomeSlider::find($this->slider_id);
        $slider->title = $this->title;
        $slider->sub_title = $this->sub_title;
        $slider->description = $this->description;

        if($this->newImage){
            $imagename = Carbon::now()->timestamp.'.'.$this->newImage->extension();
            $this->newImage->storeAs('Sliders', $imagename);
            $slider->image = $imagename;
        }
        $slider->save();
        session()->flash('message', 'Slider updated successfully');
        return redirect()->route('home-slider');
    }
    public function render()
    {
        return view('livewire.admin.home-slider.edit-home-slider-component')->layout('layouts.admin');
    }
}
