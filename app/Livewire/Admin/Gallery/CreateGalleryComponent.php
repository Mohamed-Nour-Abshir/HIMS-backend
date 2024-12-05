<?php

namespace App\Livewire\Admin\Gallery;

use Carbon\Carbon;
use App\Models\Gallery;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateGalleryComponent extends Component
{
    use WithFileUploads;

    public $image_alt, $image;

    public function updated($field)
    {
        $this->validateOnly($field, [
            'image_alt' => 'nullable|string|max:200',
            'image' => 'required|image',
        ]);
    }

    public function createGallery()
    {
        $this->validate([
            'image_alt' => 'nullable|string|max:200',
            'image' => 'required|image',
        ]);

        $gallery = new Gallery();
        $gallery->image_alt = $this->image_alt;

        if ($this->image) {
            $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
            $this->image->storeAs('gallery', $imageName);
            $gallery->image = $imageName;
        }

        $gallery->save();

        $this->reset(['image_alt', 'image']);
        session()->flash('message', 'Gallery Created Successfully');
    }

    //  render.view
    public function render()
    {
        return view('livewire.admin.gallery.create-gallery-component')->layout('layouts.admin');
    }
}
