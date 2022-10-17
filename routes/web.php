<?php

use App\Http\Controllers\ListingsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Listing;
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

Route::get('/listings/create', [ListingsController::class, 'create']);

Route::post('/listings', [ListingsController::class, 'store']);

Route::get('/listing/{listing}', [ListingsController::class, 'show']);
