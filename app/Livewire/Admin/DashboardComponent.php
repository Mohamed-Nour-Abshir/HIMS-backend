<?php

namespace App\Livewire\Admin;

use App\Models\Admission;
use App\Models\Contact;
use App\Models\Course;
use App\Models\News;
use App\Models\Notice;
use App\Models\Faculty;
use Livewire\Component;

class DashboardComponent extends Component
{
    public function render()
    {
        $admissions = Admission::all();
        $team = Faculty::all();
        $courses = Course::all();
        $news = News::all();
        $notices = Notice::all();
        $contacts = Contact::all();
        $latest_admissions = Admission::latest()->take(10)->get();
        return view('livewire.admin.dashboard-component', compact('admissions','courses','team', 'news', 'notices', 'contacts', 'latest_admissions'))->layout('layouts.admin');
    }
}
