<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index']);
/* ketika Route kita ada di register.php akan menjalankan function index yang ada di dalam registercontroller*/
Route::post('/register-proses',[RegisterController::class, 'register_proses']);
Route::post('/login-proses', [LoginController::class, 'login_proses']);
Route::Post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('/products', ProductController::class)->middleware('auth');