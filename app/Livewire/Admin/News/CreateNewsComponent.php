<?php

namespace App\Livewire\Admin\News;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class CreateNewsComponent extends Component
{
    use WithFileUploads;

    public $title, $description, $image;

    public function createNews()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ]);

        $news = new \App\Models\News();
        $news->title = $this->title;
        $news->slug = Str::slug($this->title);
        $news->description = $this->description;
        if($this->image)
        {
            $img_name = now()->timestamp.'.'.$this->image->extension();
            $this->image->storeAs('news', $img_name);
            $news->image = $img_name;
        }
        $news->save();

        $this->reset(['title','description','image']);

        session()->flash('success','News Created Successfully');
    }

    //  render.view
    public function render()
    {
        return view('livewire.admin.news.create-news-component')->layout('layouts.admin');
    }
}
