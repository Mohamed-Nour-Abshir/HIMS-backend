<?php

namespace App\Livewire\Admin\News;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class EditNewsComponent extends Component
{
    use WithFileUploads;

    public $title, $description, $news_id, $image, $old_image;

    public function mount($id)
    {
        $news = \App\Models\News::find($id);
        $this->title = $news->title;
        $this->description = $news->description;
        $this->news_id = $news->id;
        $this->old_image = $news->image;
    }

    public function updateNews()
    {
        try{
            $this->validate([
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,webp,png,jpg,gif,svg|max:10000',
            ]);

            $news = \App\Models\News::find($this->news_id);
            $news->title = $this->title;
            $news->slug = Str::slug($this->title);
            $news->description = $this->description;
            if ($this->image) {
                if ($this->old_image) {
                    unlink('assets/images/news/' . $this->old_image);
                }
                $imageName = time() . '.' . $this->image->extension();
                $this->image->storeAs('news', $imageName);
                $news->image = $imageName;
            }
            $news->update();

            session()->flash('message', 'News Updated Successfully');
        }catch(\Exception $e){
            session()->flash('error', $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.admin.news.edit-news-component')->layout('layouts.admin');
    }
}
