<?php

namespace App\Livewire\Admin\Notice;

use Livewire\Component;

class IndexNoticeComponent extends Component
{
    public function destroyNotice($id)
    {
        $notice = \App\Models\Notice::find($id);
        if($notice->image)
        {
            unlink('assets/images/notice/'.$notice->image);
        }
        $notice->delete();
        session()->flash('message', 'Notice Deleted Successfully');
    }

    public function render()
    {
        return view('livewire.admin.notice.index-notice-component',[
            'notices' => \App\Models\Notice::all(),
        ])->layout('layouts.admin');
    }
}
