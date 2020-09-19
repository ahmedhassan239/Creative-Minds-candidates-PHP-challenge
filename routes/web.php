<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/signup', [UserController::class, 'create']);
Route::post('/signup', [UserController::class, 'store']);
Route::post('/logout', [UserController::class, 'logout']);
Route::get('/show-all', [UserController::class, 'index']);
Route::post('/user/{id}', [UserController::class, 'update']);
Route::post('/user/{id}', [UserController::class, 'update']);
Route::get('/users/{id}/delete', [UserController::class, 'destroy']);
Route::get('/login', [UserController::class, 'createLogin']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/verify-code/{mobile}', [UserController::class, 'verify_code']);
Route::post('/verify-code', [UserController::class, 'verify']);

