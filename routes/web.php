<?php

use App\Livewire\Admin\DashboardComponent;
use App\Livewire\Admin\HomeSlider\HomeSliderComponent;
use App\Livewire\AdmissionFeesComponent;
use App\Livewire\AffiliateComponent;
use App\Livewire\ApplyCourseComponent;
use App\Livewire\ContactComponent;
use App\Livewire\CoursesComponent;
use App\Livewire\GalleryComponent;
use App\Livewire\HomeComponent;
use App\Livewire\ManagementTeamComponent;
use App\Livewire\MissionVisionComponent;
use App\Livewire\NewsComponent;
use App\Livewire\NoticeBoardComponent;
use App\Livewire\TeachersComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeComponent::class);
Route::get('/mission-vision', MissionVisionComponent::class)->name('mission');
Route::get('/management-team', ManagementTeamComponent::class)->name('management-team');
Route::get('/notice-board', NoticeBoardComponent::class)->name('notice');
Route::get('/news', NewsComponent::class)->name('news');
Route::get('/affiliate', AffiliateComponent::class)->name('affiliate');
Route::get('/teachers', TeachersComponent::class)->name('teachers');
Route::get('/courses', CoursesComponent::class)->name('courses');
Route::get('/admission-fess', AdmissionFeesComponent::class)->name('admission-fees');
Route::get('/our-gallery', GalleryComponent::class)->name('gallery');
Route::get('/contact-us', ContactComponent::class)->name('contact');
Route::get('/apply-now', ApplyCourseComponent::class)->name('apply');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', DashboardComponent::class)->name('dashboard');
    Route::get('admin/home-slider', HomeSliderComponent::class)->name('home-slider');
});
