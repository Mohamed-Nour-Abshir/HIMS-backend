<?php

namespace App\Livewire\Admin\Notice;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class CreateNoticeComponent extends Component
{
    use WithFileUploads;

    public $title, $image, $description;

    public function createNotice()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp,svg|max:10000',
        ]);

        $notice = new \App\Models\Notice();
        $notice->title = $this->title;
        $notice->slug = Str::slug($this->title);
        $notice->description = $this->description;
        if($this->image){
            $imageName = time().'.'.$this->image->extension();
            $this->image->storeAs('notice', $imageName);
            $notice->image = $imageName;
        }
        $notice->save();

        $this->reset(['title','description','image']);

        session()->flash('success','Notice Created Successfully');
    }

    //  render.view
    public function render()
    {
        return view('livewire.admin.notice.create-notice-component')->layout('layouts.admin');
    }
}
