<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Landing;
use Illuminate\Support\Facades\Route;

Route::name('landing.')->group(function () {
    Route::get('/', [Landing\HomeController::class, 'index'])->name('home');
    Route::get('/about', [Landing\AboutController::class, 'index'])->name('about');
    Route::get('/feature', [Landing\FeatureController::class, 'index'])->name('feature');
    Route::get('/course', [Landing\CourseController::class, 'index'])->name('course');
    Route::get('/blog', [Landing\BlogController::class, 'index'])->name('blog');
    Route::get('/contact', [Landing\ContactController::class, 'index'])->name('contact');
});

Route::prefix('panel')->name('admin.')->group(function () {
    Route::get('/', [Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/calendar', [Admin\CalendarController::class, 'index'])->name('calendar');
    Route::get('/form-elements', [Admin\FormElementController::class, 'index'])->name('form-elements');
    Route::get('/table-plugins', [Admin\TablePluginController::class, 'index'])->name('table-plugins');
    Route::get('/ui-modal-notification', [Admin\ModalNotificationController::class, 'index'])->name('ui-modal-notification');
    Route::get('/login', [Admin\LoginController::class, 'index'])->name('login');
});
