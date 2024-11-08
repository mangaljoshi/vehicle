<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\VehicleModelController;


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
