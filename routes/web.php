<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'index']);
Route::get('/tambah', [PagesController::class, 'create']);
Route::get('/{id}', [PagesController::class, 'show']);
Route::post('/setor', [PagesController::class, 'store']);
Route::delete('/{id}', [PagesController::class, 'destroy']);
Route::get('/{id}/edit', [PagesController::class, 'edit']);
Route::put('/{id}', [PagesController::class, 'update']);