<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\Medical\DiagnoseController;
use App\Http\Controllers\Medical\MedicalExaminationController;
use App\Http\Controllers\Medical\MedicalImagingController;
use App\Http\Controllers\Medical\MedicalTestsController;
use App\Http\Controllers\Medical\PatientController;
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


Route::get('/create_doctor', [DoctorController::class , 'create']) ;
Route::get('/create_employee', [EmployeeController::class , 'create']) ;
Route::get('/create_patient', [PatientController::class , 'create']) ;

Route::get('/create_examination', [MedicalExaminationController::class , 'create']) ;
Route::get('/create_diagnose', [DiagnoseController::class , 'create']) ;
Route::get('/create_MedicalImaging', [MedicalImagingController::class , 'create']) ;
Route::get('/create_MedicalTests', [MedicalTestsController::class , 'create']) ;
