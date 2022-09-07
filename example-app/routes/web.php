<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GymController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[GymController::class,'index'])->name('index');
Route::get('/about',[GymController::class,'about'])->name('about');
Route::get('/featur',[GymController::class,'featur'])->name('featur');
Route::get('/classes',[GymController::class,'classes']);
Route::get('/grid',[GymController::class,'grid']);
Route::get('/detail',[GymController::class,'detail']);
Route::get('/contact',[GymController::class,'contact']);
