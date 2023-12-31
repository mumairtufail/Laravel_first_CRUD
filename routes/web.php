<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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


Route::get('/', [CategoryController::class,'index']);

Route::get('/category-create', [CategoryController::class,'create']);
Route::post('/category-store', [CategoryController::class,'store']);
Route::get('/category-edit/{id}', [CategoryController::class,'edit']);
Route::put('/category-update/{id}', [CategoryController::class,'update']);
Route::get('/category-delete/{id}', [CategoryController::class,'destroy']);
