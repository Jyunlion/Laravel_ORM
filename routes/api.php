<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/select/all', [ProductController::class, 'selectAll']);
Route::get('/insert/{name}/{price}', [ProductController::class, 'insertData']);
Route::get('/update/{id}/{name}/{price}', [ProductController::class, 'updateData']);
Route::get('/delete/{id}', [ProductController::class, 'deleteData']);