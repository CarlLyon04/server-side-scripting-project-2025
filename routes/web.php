<?php

use Illuminate\Support\Facades\Route;

// Call the defined college and student controllers
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Definition for the resourceful College Route
Route::resource('colleges', CollegeController::class);

// Definition for the resourceful Student Route
Route::resource('students', StudentController::class);

// automatically redirect the user to the colleges index page upon loading the application
Route::redirect('/', '/colleges');