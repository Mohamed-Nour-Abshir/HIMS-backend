<?php

<<<<<<< HEAD
use App\Livewire\HomeComponent;
use App\Livewire\NewsComponent;
=======
use App\Livewire\Admin\DashboardComponent;
use App\Livewire\Admin\HomeSlider\EditHomeSliderComponent;
use App\Livewire\Admin\HomeSlider\HomeSliderComponent;
use App\Livewire\Admin\Settings\SettingsComponent;
use App\Livewire\AdmissionFeesComponent;
use App\Livewire\AffiliateComponent;
use App\Livewire\ApplyCourseComponent;
>>>>>>> 0905362aedcb4b56bf66e08010c4ee885912d790
use App\Livewire\ContactComponent;
use App\Livewire\CoursesComponent;
use App\Livewire\GalleryComponent;
use App\Livewire\TeachersComponent;
use App\Livewire\AffiliateComponent;
use Illuminate\Support\Facades\Route;
use App\Livewire\ApplyCourseComponent;
use App\Livewire\NoticeBoardComponent;
use App\Livewire\AdmissionFeesComponent;
use App\Livewire\MissionVisionComponent;
use App\Livewire\ManagementTeamComponent;
use App\Livewire\Admin\DashboardComponent;
use App\Livewire\Admin\Course\CourseComponent;
use App\Livewire\Admin\Course\EditCourseComponent;
use App\Livewire\Admin\Course\CreateCourseComponent;
use App\Livewire\Admin\HomeSlider\HomeSliderComponent;
use App\Livewire\Admin\HomeSlider\EditHomeSliderComponent;

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
    Route::get('admin/home-slider/edit/{id}', EditHomeSliderComponent::class)->name('home-slider.edit');
<<<<<<< HEAD

    Route::prefix('/admin')->group(function () {
        Route::get('/course', CourseComponent::class)->name('admin.course');
        Route::get('/course/create', CreateCourseComponent::class)->name('course.create');
        Route::get('/course/edit/{id}', EditCourseComponent::class)->name('course.edit');
    });
=======
    Route::get('admin/settings', SettingsComponent::class)->name('settings');
>>>>>>> 0905362aedcb4b56bf66e08010c4ee885912d790
});
