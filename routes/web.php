<?php

use App\Livewire\Admin\Admissions\AdmissionApplationsComponent;
use App\Livewire\Admin\Contact\ContactComponenet;
use App\Livewire\HomeComponent;
use App\Livewire\NewsComponent;
use App\Livewire\ContactComponent;
use App\Livewire\CoursesComponent;
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
use App\Livewire\Admin\Gallery\GalleryComponent;
use App\Livewire\Admin\Course\EditCourseComponent;
use App\Livewire\Admin\Settings\SettingsComponent;
use App\Livewire\Admin\Course\CreateCourseComponent;
use App\Livewire\Admin\Faculty\CreateFacultyComponent;
use App\Livewire\Admin\Faculty\EditFacultyComponent;
use App\Livewire\Admin\Faculty\FacultyComponent;
use App\Livewire\Admin\Gallery\EditGalleryComponent;
use App\Livewire\Admin\Gallery\CreateGalleryComponent;
use App\Livewire\Admin\HomeSlider\HomeSliderComponent;
use App\Livewire\Admin\HomeSlider\EditHomeSliderComponent;
use App\Livewire\Admin\Partner\CreatePartnerComponent;
use App\Livewire\Admin\Partner\EditPartnerComponent;
use App\Livewire\Admin\Partner\PartnerComponent;
use App\Models\Partner;

Route::get('/', HomeComponent::class);
Route::get('/mission-vision', MissionVisionComponent::class)->name('mission');
Route::get('/management-team', ManagementTeamComponent::class)->name('management-team');
Route::get('/notice-board', NoticeBoardComponent::class)->name('notice');
Route::get('/news', NewsComponent::class)->name('news');
Route::get('/affiliate', AffiliateComponent::class)->name('affiliate');
Route::get('/teachers', TeachersComponent::class)->name('teachers');
Route::get('/courses', CoursesComponent::class)->name('courses');
Route::get('/admission-fess', AdmissionFeesComponent::class)->name('admission-fees');
Route::get('/our-gallery', App\Livewire\GalleryComponent::class)->name('gallery');
Route::get('/contact-us', ContactComponent::class)->name('contact');
Route::get('/apply-now', ApplyCourseComponent::class)->name('apply');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', DashboardComponent::class)->name('dashboard');
    Route::get('admin/home-slider', HomeSliderComponent::class)->name('home-slider');
    Route::get('admin/home-slider/edit/{id}', EditHomeSliderComponent::class)->name('home-slider.edit');
    Route::get('admin/settings', SettingsComponent::class)->name('settings');
    Route::get('admin/contacts', ContactComponenet::class)->name('contacts');

    Route::prefix('/admin')->group(function () {
        //  course.route
        Route::get('/course', CourseComponent::class)->name('admin.course');
        Route::get('/course/create', CreateCourseComponent::class)->name('course.create');
        Route::get('/course/edit/{id}', EditCourseComponent::class)->name('course.edit');

        //  gallery.route
        Route::get('/gallery', GalleryComponent::class)->name('admin.gallery');
        Route::get('/gallery/create', CreateGalleryComponent::class)->name('gallery.create');
        Route::get('/gallery/edit/{id}', EditGalleryComponent::class)->name('gallery.edit');

        //  faculty.route
        Route::get('/faculty', FacultyComponent::class)->name('admin.faculty');
        Route::get('/faculty/create', CreateFacultyComponent::class)->name('faculty.create');
        Route::get('/faculty/edit/{id}', EditFacultyComponent::class)->name('faculty.edit');
    });

    Route::get('admin/admissions', AdmissionApplationsComponent::class)->name('admin.admissions');
    Route::get('admin/partners', PartnerComponent::class)->name('partners');
    Route::get('admin/partners/create', CreatePartnerComponent::class)->name('partner.create');
    Route::get('admin/partners/edit/{id}', EditPartnerComponent::class)->name('partner.edit');
    Route::get('admin/settings', SettingsComponent::class)->name('settings');

});
