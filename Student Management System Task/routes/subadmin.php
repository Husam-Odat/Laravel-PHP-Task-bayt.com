<?php

use App\Http\Controllers\AdminController;

use App\Http\Controllers\HR_System\Subadmin\UserController;
use App\Http\Controllers\HR_System\AdminHomeController;
use App\Http\Controllers\HR_System\Subadmin\AttendanceController;
use App\Http\Controllers\HR_System\Subadmin\ClassesController;
use App\Http\Controllers\HR_System\Subadmin\StudentsController;
use App\Http\Controllers\HR_System\Subadmin\ExamsController;
use App\Http\Controllers\HR_System\Subadmin\MarksController;
use App\Http\Controllers\HR_System\Subadmin\VacationsController;

use Illuminate\Support\Facades\Route;

Route::prefix('subadmin')->name('subadmin.')->group(function () {
    Route::middleware(['guest:subadmin'])->group(function () {
        Route::view('/login', 'subadmin.pages.login')->name('login');
        Route::post('/login_handler', [UserController::class, 'loginHandler'])->name('login_handler');
    });
    Route::middleware('subadmin')->group(function () {
        Route::get('/home', [AdminHomeController::class, 'index'])->name('home');
        Route::post('/logout_handler', [AdminController::class, 'logoutHandler'])->name('logout_handler');
        Route::resource('users', UserController::class);

        Route::get('/profile', [AdminController::class, 'adminProfile'])->name('profile');
        Route::post('/profile-update/{id}', [AdminController::class, 'updateProfile'])->name('profile.update');
        Route::get('/profile/change-password', [AdminController::class, 'changePassword'])->name('profile.change-password');
        Route::post('/profile/update-password/{id}', [AdminController::class, 'updatePassword'])->name('profile.update-password');

        // Student Manegment System
        Route::resource('students', StudentsController::class);
        Route::resource('classes', ClassesController::class);
        Route::resource('exams', ExamsController::class);
        Route::resource('marks', MarksController::class);
        Route::resource('vacations', VacationsController::class);
        Route::resource('attendance', AttendanceController::class);
    });
});
