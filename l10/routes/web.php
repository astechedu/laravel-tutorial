<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('aboutus');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/passdata', [UserController::class, 'index'])->name('passdata');



