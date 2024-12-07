<?php

namespace App\Livewire\Admin\Notice;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class EditNoticeComponent extends Component
{
    use WithFileUploads;

    public $title, $description, $image, $old_image, $notice_id;

    public function mount($id)
    {
        $this->notice_id = $id;
        $notice = \App\Models\Notice::find($id);
        $this->title = $notice->title;
        $this->description = $notice->description;
        $this->old_image = $notice->image;
    }

    public function updateNotice()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,webp,png,jpg,gif,svg|max:10000',
        ]);

        $notice = \App\Models\Notice::find($this->notice_id);
        $notice->title = $this->title;
        $notice->slug = Str::slug($this->title);
        $notice->description = $this->description;
        if ($this->image) {
            if ($this->old_image) {
                unlink('assets/images/notice/' . $this->old_image);
            }
            $imageName = time() . '.' . $this->image->extension();
            $this->image->storeAs('notice', $imageName);
            $notice->image = $imageName;
        }
        $notice->save();
        session()->flash('message', 'Notice updated successfully');
    }

    public function render()
    {
        return view('livewire.admin.notice.edit-notice-component')->layout('layouts.admin');
    }
}
