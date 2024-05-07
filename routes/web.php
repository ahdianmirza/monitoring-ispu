<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogdataController;
use Illuminate\Support\Facades\Route;

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

Route::get('/logdata', [LogdataController::class, 'logdata'])->name('logdata.logdata');

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('layout.dashboard');
});


Route::get('/map', function () {
    return view('layout.map');
});