<?php

use App\Http\Controllers\GirlController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ReportController;
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

// Resource routes for CRUD operations
Route::resource('girls', GirlController::class);
Route::resource('events', EventController::class);
Route::resource('progress', ProgressController::class);
Route::resource('materials', MaterialController::class);

// Fallback route to handle any unspecified paths
Route::post('girls/{girl}/register', [GirlController::class, 'registerToEvent'])->name('girls.register');


Route::get('reports', [ReportController::class, 'index'])->name('reports.index');



