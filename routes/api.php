<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\ClientsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Public routes
Route::group(['prefix' => 'v1'], function () {
    // Auth routes
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
});

// Protected routes
Route::group(
    [
        'middleware' => 'auth:sanctum',
        'prefix' => 'v1'
    ],
    function () {
        // Logout route
        Route::post('/logout', [AuthController::class, 'logout']);

        Route::apiResource('/clients', ClientsController::class);
        Route::apiResource('/cars', CarsController::class);
    }
);
