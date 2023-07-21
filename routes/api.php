<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\ProductController;
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

Route::resource('products', ProductController::class);

// Auth
Route::prefix('auth')->group(function () {
    Route::post('sign-up', [AuthController::class, 'signup'])->name('auth.signup');
    Route::post('login', [AuthController::class, 'login'])->name('auth.login');
    Route::middleware(['auth:sanctum'])->group(function () {
        Route::post('logout', [AuthController::class, 'logout'])->name('auth.logout');
        Route::get('user', [AuthController::class, 'getAuthenticatedUser'])->name('auth.user');
    });


    Route::post('password/email', [AuthController::class, 'sendPasswordResetLinkEmail'])
        ->middleware('throttle:5,1')->name('password.email');
    Route::post('password/reset', [AuthController::class, 'resetPassword'])->name('password.reset');
});
