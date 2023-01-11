<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\patientController;
use App\Http\Controllers\doctorController;



Route::view('/','welcome');
Route::view('/registration','registration');
Route::view('/patientLogin','patientLogin');
Route::view('/doctorLogin','doctorLogin');
Route::view('/adminLogin','adminLogin');
Route::view('/bookAppointment','bookAppointment');
Route::view('/addDoctor','addDoctor');
Route::post('insert',[patientController::class , 'create']); 
Route::post('insert',[doctorController::class , 'create']);
Route::get('search',[doctorController::class,'search']);
