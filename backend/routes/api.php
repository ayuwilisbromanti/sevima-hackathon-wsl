<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;

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

Route::post('/get_question',[ChatController::class, 'postQuestion']);
Route::get('/get_answer',[ChatController::class, 'getAnswer']);
Route::post('/login',[ChatController::class, 'login']);
Route::post('/register',[ChatController::class, 'register']);

