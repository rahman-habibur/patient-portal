<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\PatientController;
use App\Http\Controllers\WebcamController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

// webcam controller 
Route::controller(WebcamController::class)->group(function(){
    
    Route::get('webcam', 'index')->name('webcam.home');
    Route::post('webcam', 'store')->name('webcam.capture');
});

//Patient Controller
Route::controller(PatientController::class)->group(function(){
    // add patient 
    Route::get('/patient', 'index')->name('patient.index');
    Route::post('/patient/add', 'store')->name('patient.add');

    // patient list 
    Route::get('/patientlist', 'show')->name('patient.list');

    Route::get('/patient/delete/{id}', 'destroy')->name('patient.delete');

    Route::get('/patient/edit/{id}', 'edit')->name('patient.edit');
    Route::post('/patient/update/{id}', 'update')->name('patient.update');
});

