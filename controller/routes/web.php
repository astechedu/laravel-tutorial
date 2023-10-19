<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProvisionServer;
use App\Http\Controllers\PhotoController;
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


//Simple Controller: Student
 
Route::get('student', [StudentController::class, 'index'])->name('student.index');
Route::get('create', [StudentController::class, 'create'])->name('student.create');
Route::get('show', [StudentController::class, 'show'])->name('student.show');
Route::get('edit', [StudentController::class, 'edit'])->name('student.edit');


//Single Action Controller
Route::get('server', ProvisionServer::class)->name('server');


//Resource Controller
Route::resource('photos', PhotoController::class);
