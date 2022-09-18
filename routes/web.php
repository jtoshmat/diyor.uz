<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\PublicController::class, 'index'])->name('index');
Route::get('/service', [\App\Http\Controllers\PublicController::class, 'service'])->name('service');



Route::get('/aboutus', [\App\Http\Controllers\Mycontroller::class, 'aboutus'])->name('aboutus');
Route::get('/airports', [\App\Http\Controllers\Mycontroller::class, 'airports'])->name('airports');
Route::get('/resume', [\App\Http\Controllers\Mycontroller::class, 'resume'])->name('resume');
Route::get('/portfolio', [\App\Http\Controllers\Mycontroller::class, 'portfolio'])->name('portfolio');
