<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])
    ->name('home');

Route::get('/courses', [PageController::class, 'courses'])
    ->name('courses');

Route::get('/course/{id}', [PageController::class, 'courseDetails'])
    ->name('course.details');

Route::get('/about', [PageController::class, 'about'])
    ->name('about');

Route::get('/contact', [PageController::class, 'contact'])
    ->name('contact');

Route::post('/contact', function (Request $request) {
    return back()->with('success', 'پیام شما با موفقیت ارسال شد.');
})->name('contact.submit');

Route::get('/faq', [PageController::class, 'faq'])
    ->name('faq');

Route::get('/my-account', [PageController::class, 'myAccount'])
    ->name('my.account');

Route::get('/booking', [PageController::class, 'booking'])
    ->name('booking');

Route::get('/library', [PageController::class, 'library'])
    ->name('library');

Route::get('/behind-scene', [PageController::class, 'behindScene'])
    ->name('behind.scene');

Route::get('/login', [AuthController::class, 'login'])
    ->name('login');

Route::get('/register', [AuthController::class, 'register'])
    ->name('register');

Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])
    ->name('password.request');