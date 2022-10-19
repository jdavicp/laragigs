<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingsController;
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
Route::get('/', [ListingsController::class, 'index']);
Route::prefix('/listings')->group(function() {
    Route::get('/create', [ListingsController::class, 'create']);

    Route::post('/', [ListingsController::class, 'store']);

    Route::get('/{listing}/edit', [ListingsController::class, 'edit']);

    Route::put('/{listing}', [ListingsController::class, 'update']);

    Route::delete('/{listing}', [ListingsController::class, 'destroy']);

    Route::get('/{listing}', [ListingsController::class, 'show']);
});


Route::get('/register', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'store']);
Route::post('/logout', [UserController::class, 'logout']);
