<?php

namespace App\Livewire\Admin\Gallery;

use App\Models\Gallery;
use Livewire\Component;

class GalleryComponent extends Component
{

    public function deleteGallery($id){
        $gallery = Gallery::find($id);

        if($gallery->image)
        {
            unlink('assets/images/gallery/'.$gallery->image);
        }

        $gallery->delete();

        session()->flash('message', 'Gallery Deleted Successfully');

    }

    public function render()
    {
        $galleries = Gallery::all();
        return view('livewire.admin.gallery.gallery-component',[
            'galleries' => $galleries
        ])->layout('layouts.admin');
    }
}
