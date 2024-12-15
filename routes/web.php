<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UmkmController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/about', [AboutController::class, 'index'])->name('about.index');

Route::get('/facility', [FacilityController::class, 'index'])->name('facility.index');
Route::get('/facility/detail', [FacilityController::class, 'show'])->name('facility.show');

Route::get('/umkm', [UmkmController::class, 'index'])->name('umkm.index');

Route::get('/event', [EventController::class, 'index'])->name('event.index');
