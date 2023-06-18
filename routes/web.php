<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;

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

Route::get('/', function () {
    return view('welcome');
});

//routing 
Route::get('student-list', [studentController::class, 'index']);
Route::get('add-student', [studentController::class, 'addStudent']);
Route::post('save-student', [studentController::class, 'saveStudent']);
Route::get('edit-student/{id}', [studentController::class, 'editStudent']);
Route::post('update-student', [studentController::class, 'updateStudent']);
Route::get('delete-student/{id}', [studentController::class, 'deleteStudent']);
