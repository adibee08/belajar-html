<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;

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

Route::get('/apiProduct', [ProductController::class, 'index']);
Route::get('/detailProduct/{id}', [ProductController::class, 'show']);
Route::post('/createProduct', [ProductController::class, 'store']);
Route::put('/updateProduct/{id}', [ProductController::class, 'update']);
Route::delete('/deleteProduct/{id}', [ProductController::class, 'destroy']);

Route::get('/dataUser', [UserController::class, 'index']);
Route::get('/totalUser', [UserController::class, 'total_user']);