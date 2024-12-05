<?php

namespace App\Livewire\Admin\Gallery;

use Carbon\Carbon;
use App\Models\Gallery;
use Livewire\Component;

class EditGalleryComponent extends Component
{
    public $gallery_id, $image_alt, $image, $oldimage;

    public function mount($id)
    {
        $this->gallery_id = $id;

        $gallery = Gallery::find($id);
        $this->image_alt = $gallery->image_alt;
        $this->oldimage = $gallery->image;
    }

    public function updateGallery()
    {
        $this->validate([
            'image_alt' => 'nullable|string|max:200',
            'image' => 'nullable|image',
        ]);

        $gallery = Gallery::find($this->gallery_id);
        $gallery->image_alt = $this->image_alt;

        if ($this->image) {
            $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
            $this->image->storeAs('gallery', $imageName);
            $gallery->image = $imageName;
        }

        $gallery->save();
        
        session()->flash('message', 'Gallery Updated Successfully');
    }

    public function render()
    {
        return view('livewire.admin.gallery.edit-gallery-component')->layout('layouts.admin');
    }
}
