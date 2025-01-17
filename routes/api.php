<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\infrastruction\RoomController;
use App\Http\Controllers\Staff\DoctorController;
use App\Http\Controllers\Medical\DiagnoseController;
use App\Http\Controllers\Medical\MedicalExaminationController;
use App\Http\Controllers\Medical\MedicalImagingController;
use App\Http\Controllers\Medical\MedicalTestsController;
use App\Http\Controllers\Medical\PatientController;
use App\Http\Controllers\Medical\SurgeryController;
use App\Http\Controllers\Orders\OrderController;
use App\Http\Controllers\Orders\ProductPharmacyController;
use App\Http\Controllers\Staff\EmployeeController;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [AuthController::class , 'register']) ;
Route::post('/refresh', [AuthController::class , 'refresh']) ;
Route::post('/login', [AuthController::class , 'login']) ;
Route::post('/logout', [AuthController::class , 'logout']) ;

Route::resource('doctor' , DoctorController::class);

Route::resource('employee' , EmployeeController::class);

Route::resource('patient' , PatientController::class);

Route::resource('examination' , MedicalExaminationController::class);

Route::resource('diagnose' , DiagnoseController::class);

Route::resource('MedicalImaging' , MedicalImagingController::class);

Route::resource('medical_test' , MedicalTestsController::class);

Route::resource('Product_Pharmacy' , ProductPharmacyController::class);

Route::resource('order' , OrderController::class);

Route::resource('surgery' , SurgeryController::class);

Route::resource('rooms' , RoomController::class);


