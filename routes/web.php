<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\GetHiredController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobProfileController;
use App\Http\Controllers\PrincingController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', HomeController::class)->name('home');
Route::get('/princing', PrincingController::class)->name('princing');
Route::resource('get-hidred', GetHiredController::class, ['index', 'show']);
Route::view('/contact', 'contact')->name('contact');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::resource('jobs', JobController::class);
    Route::resource('companies', CompanyController::class, ['index', 'create', 'edit', 'store', 'update']);

    Route::get('checkout/{plan?}', [CheckoutController::class, 'checkout'])
        ->name('checkout');
    Route::get('success/{plan?}/{prod?}', [CheckoutController::class, 'success'])
        ->name('success');

    Route::resource('jobs-profile', JobProfileController::class);
});