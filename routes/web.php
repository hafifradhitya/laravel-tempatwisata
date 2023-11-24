<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationsController;
use App\Http\Controllers\AppController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/destinations', DestinationsController::class);
Route::get('template', [AppController::class,"template"]);
Route::get('wisata', [AppController::class,"wisata"]);
Route::get('dashboard', [AppController::class,"dashboard"]);
Route::post('destinations/search', [DestinationsController::class,'index']);
Route::get('destinations/destination', [DestinationsController::class,'show']);