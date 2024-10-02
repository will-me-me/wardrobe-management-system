<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClotheItemController;
use App\Http\Controllers\UserController;

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



// Unprotected routes (open to everyone)
Route::post('/users', [UserController::class, 'store']);  
Route::post('/login', [UserController::class, 'login']);  

// Protected routes (require authentication)
Route::middleware('auth:sanctum')->group(function () {

        Route::post('/clothe-items', [ClotheItemController::class, 'store']);
        Route::get('/clothe-items', [ClotheItemController::class, 'index']);
        Route::delete('/clothe-items/{id}', [ClotheItemController::class, 'destroy']);
        Route::put('/clothe-items/{id}', [ClotheItemController::class, 'update']);
        Route::get('/clothe-items/{id}', [ClotheItemController::class, 'show']);
        Route::post('/logout', [UserController::class, 'logout']);
});