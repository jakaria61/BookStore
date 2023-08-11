<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BookController::class,'index']);
Route::get('/book-add', [BookController::class,'create']);
Route::post('/book-store', [BookController::class,'store']);
Route::get('/edit-book/{id}', [BookController::class,'edit']);
Route::put('/book-update/{id}', [BookController::class,'update']);
Route::get('/delete-book/{id}', [BookController::class,'destroy']);

