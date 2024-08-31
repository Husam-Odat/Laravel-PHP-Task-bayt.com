<?php

use App\Http\Controllers\AdminController;

use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\HR_System\AdminHomeController;
use App\Http\Controllers\HR_System\AttendanceController;
use App\Http\Controllers\HR_System\AttendanceUserController;
use App\Http\Controllers\HR_System\ClassesController;
use App\Http\Controllers\HR_System\ClassesUserController;
use App\Http\Controllers\HR_System\StudentsController;
use App\Http\Controllers\HR_System\StudentsUserController;
use App\Http\Controllers\HR_System\ExamsController;
use App\Http\Controllers\HR_System\ExamsUserController;
use App\Http\Controllers\HR_System\MarksController;
use App\Http\Controllers\HR_System\MarksUserController;
use App\Http\Controllers\HR_System\VacationsController;
use App\Http\Controllers\HR_System\VacationsUserController;
use Illuminate\Support\Facades\Route;

Route::prefix('user')->name('user.')->group(function () {
    Route::middleware(['guest:user'])->group(function () {
        Route::view('/login', 'user.pages.login')->name('login');
        Route::post('/login_handler', [UserController::class, 'loginHandler'])->name('login_handler');
    });
    Route::middleware('auth')->group(function () {
        Route::get('/home', [AdminHomeController::class, 'index'])->name('home');
        Route::post('/logout_handler', [AdminController::class, 'logoutHandler'])->name('logout_handler');
        Route::resource('users', UserController::class);
        Route::get('/profile', [AdminController::class, 'adminProfile'])->name('profile');
        Route::post('/profile-update/{id}', [AdminController::class, 'updateProfile'])->name('profile.update');
        Route::get('/profile/change-password', [AdminController::class, 'changePassword'])->name('profile.change-password');
        Route::post('/profile/update-password/{id}', [AdminController::class, 'updatePassword'])->name('profile.update-password');

        // Student Manegment System
        Route::resource('students', StudentsUserController::class);

        Route::resource('classes', ClassesUserController::class);
        Route::resource('exams', ExamsUserController::class);
        Route::resource('marks', MarksUserController::class);
        Route::resource('vacations', VacationsUserController::class);
        Route::resource('attendance', AttendanceUserController::class);
    });
});
