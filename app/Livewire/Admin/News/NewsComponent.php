<?php

namespace App\Livewire\Admin\News;

use Livewire\Component;

class NewsComponent extends Component
{

    public function destroyNews($id)
    {
        $news = \App\Models\News::find($id);

        if($news->image)
        {
            unlink('assets/images/news/'.$news->image);
        }

        $news->delete();

        session()->flash('message', 'News Deleted Successfully');
    }

    //  render.view
    public function render()
    {
        return view('livewire.admin.news.news-component',[
            'newses' => \App\Models\News::all()
        ])->layout('layouts.admin');
    }
}
