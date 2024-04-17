<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CusdtomAuthController;

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

Route::get('/login',[CusdtomAuthController::class,'login']);
Route::get('/registration',[CusdtomAuthController::class,'registration']);
Route::post('/register-user',[CusdtomAuthController::class,'register'])-> name("register-user");

