<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginCobtroller;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\SalatigaTodayController;
use App\Http\Controllers\Api\DigitalFinanceController;
use App\Http\Controllers\Api\TrayekController;

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
Route::post('/event', [EventController::class, 'create']);
//api digitalfinance
Route::get('/digital-finance', [DigitalFinanceController::class, 'index']);
Route::post('digital-finance', [DigitalFinanceController::class, 'create']);
//api salatiga today
Route::get('/salatiga-today', [SalatigaTodayController::class, 'index']);

//api trayek
Route::get('/trayek', [TrayekController::class, 'index']);
Route::post('/trayek', [TrayekController::class, 'create']);
Route::get('/trayek/{id}', [TrayekController::class, 'listAngkotByTrayek']);