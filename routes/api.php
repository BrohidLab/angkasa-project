<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginCobtroller;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\SalatigaTodayController;
use App\Http\Controllers\Api\DigitalFinanceController;
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

Route::post('/login', [LoginCobtroller::class, 'index']);
Route::post('/register', [LoginCobtroller::class, 'register']);


//api event
Route::get('/event', [EventController::class, 'index']);
//api digitalfinance
Route::get('/digital-finance', [DigitalFinanceController::class, 'index']);
Route::get('/salatiga-today', [SalatigaTodayController::class, 'index']);