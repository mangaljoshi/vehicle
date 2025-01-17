<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\VehicleModelController;
use App\Http\Controllers\CorporalController;



Route::get('/vehicle-form', function () {
    return view('vehicle.pages.form');
});

Route::get('/vehicle-form', [VehicleController::class, 'showForm']);
Route::get('/do-not-sell', [VehicleController::class, 'doNotSell'])->name('doNotSell');
Route::get('/vehicle/pages/privacy', [VehicleController::class, 'privacy'])->name('privacy');


Route::get('vehicle-models', [VehicleModelController::class, 'index'])->name('vehicle.models.index');
Route::get('/form', [VehicleController::class, 'showForm'])->name('form.show'); // Show form
Route::post('/submit-form', [VehicleController::class, 'submitForm'])->name('form.submit'); // Handle form submission
Route::get('/thank-you', [VehicleController::class, 'thankYou'])->name('thankyou'); // Thank you page


//Corporal routes//
// File: resources/views/corporal/form.blade.php
Route::get('/corporal-form', function () {
    return view('corporal.pages.form');
});

Route::get('/form', [CorporalController::class, 'form'])->name('corporal.form');
Route::get('/do-not-sell-my-info', [CorporalController::class, 'doNotSellMyInfo'])->name('doNotSellMyInfo');
Route::get('/privacy', [CorporalController::class, 'privacy'])->name('privacy');
Route::get('/terms', [CorporalController::class, 'terms'])->name('terms');




