<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TodoController;

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

// Route::get('/todo', [TodoController::class, 'index']);

// Route::get('/todo/{todo}', [TodoController::class, 'show']);

// Route::post('/todo', [TodoController::class, 'store']);

// Route::put('/todo/{todo}', [TodoController::class, 'update']);

// Route::delete('/todo/{todo}', [TodoController::class, 'destroy']);

Route::apiResource('todo', TodoController::class);
