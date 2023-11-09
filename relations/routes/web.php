<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
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

Route::get('/', function(){
    return view('index');
});


//One to one
Route::get('/test/user', [TestController::class, 'user']);
Route::get('/test/contact', [TestController::class, 'contact']);

//One to many
Route::get('/test/one2many', [TestController::class, 'one2many']);