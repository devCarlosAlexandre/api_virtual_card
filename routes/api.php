<?php

use App\Http\Controllers\Api\VirtualcardController;
use App\Models\Virtualcard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Virtual Cards Route
Route::namespace('Api')->group(function () {
    Route::prefix('virtualcards')->group(function () {
        Route::get('/', [VirtualcardController::class, 'index']);
        Route::post('/', [VirtualcardController::class, 'save']);
        Route::get('/{id}', [VirtualcardController::class, 'show']);
    });
});
