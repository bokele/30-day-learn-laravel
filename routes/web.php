<?php

use App\Http\Controllers\GetHiredController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PrincingController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', HomeController::class)->name('home');
Route::get('/princing', PrincingController::class)->name('princing');


Route::get('get-hidred', GetHiredController::class)->name('get-hired');



Route::view('/contact', 'contact')->name('contact');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('jobs', JobController::class);
});
