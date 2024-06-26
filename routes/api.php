<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogdataController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('logdata', [LogdataController::class, 'index']);

// API Alat
Route::get('/data-dashboard', [ApiController::class, 'getDataDashboard']);
Route::post('/log-data', [ApiController::class, 'postLogData']);
Route::put('/data-dashboard', [ApiController::class, 'dataDashboard']);