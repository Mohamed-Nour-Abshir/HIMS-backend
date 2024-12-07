<?php

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
use App\Livewire\NoticeDetailsComponent;
use App\Livewire\ManagementTeamComponent;
use App\Livewire\Admin\DashboardComponent;
use App\Livewire\Admin\Course\CourseComponent;
use App\Livewire\Admin\Faculty\FacultyComponent;
use App\Livewire\Admin\Gallery\GalleryComponent;
use App\Livewire\Admin\Contact\ContactComponenet;
use App\Livewire\Admin\Course\EditCourseComponent;
use App\Livewire\Admin\Notice\EditNoticeComponent;
use App\Livewire\Admin\Settings\SettingsComponent;
use App\Livewire\Admin\Notice\IndexNoticeComponent;
use App\Livewire\Admin\Course\CreateCourseComponent;
use App\Livewire\Admin\Faculty\EditFacultyComponent;
use App\Livewire\Admin\Gallery\EditGalleryComponent;
use App\Livewire\Admin\Notice\CreateNoticeComponent;
use App\Livewire\Admin\Client\ClientFeedbackComponent;
use App\Livewire\Admin\Faculty\CreateFacultyComponent;
use App\Livewire\Admin\Gallery\CreateGalleryComponent;
use App\Livewire\Admin\HomeSlider\HomeSliderComponent;
use App\Livewire\Admin\Client\EditClientFeedbackComponent;
use App\Livewire\Admin\HomeSlider\EditHomeSliderComponent;
use App\Livewire\Admin\Client\CreateClientFeedbackComponent;

Route::get('/', HomeComponent::class);
Route::get('/mission-vision', MissionVisionComponent::class)->name('mission');
Route::get('/management-team', ManagementTeamComponent::class)->name('management-team');
Route::get('/notice-board', NoticeBoardComponent::class)->name('notice');
Route::get('/notice-details/{slug}', NoticeDetailsComponent::class)->name('notice.details');
Route::get('/news', App\Livewire\NewsComponent::class)->name('news');
Route::get('/news-details/{slug}', App\Livewire\NewsDetailsComponent::class)->name('news.details');
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

        //  news.route
        Route::get('/news', App\Livewire\Admin\News\NewsComponent::class)->name('admin.news');
        Route::get('/news/create', App\Livewire\Admin\News\CreateNewsComponent::class)->name('news.create');
        Route::get('/news/edit/{id}', App\Livewire\Admin\News\EditNewsComponent::class)->name('news.edit');

        //  notice.route
        Route::get('/notice', IndexNoticeComponent::class)->name('admin.notice');
        Route::get('/notice/create', CreateNoticeComponent::class)->name('notice.create');
        Route::get('/notice/edit/{id}', EditNoticeComponent::class)->name('notice.edit');

        //  client.feedback.route
        Route::get('/client-feedback', ClientFeedbackComponent::class)->name('admin.feedback');
        Route::get('/client-feedback/create', CreateClientFeedbackComponent::class)->name('feedback.create');
        Route::get('/client-feedback/edit/{id}', EditClientFeedbackComponent::class)->name('feedback.edit');

        //  mission.vision.route
        Route::get('/mission-vision', App\Livewire\Admin\Mission\MissionVisionComponent::class)->name('mission.vision');
    });


    Route::get('admin/settings', SettingsComponent::class)->name('settings');


});
