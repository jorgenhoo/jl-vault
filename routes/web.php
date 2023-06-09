<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContaController;
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

Route::get('/', [ContaController::class, 'index']);
Route::get('/contas', [ContaController::class, 'contas']);
Route::get('/contas/create', [ContaController::class, 'create']);
Route::get('/contas/editar', [ContaController::class, 'editar']);
Route::get('contas/delete', [ContaController::class, 'delete']);
Route::post('contas/update', [ContaController::class, 'update']);
Route::post('/contas/save', [ContaController::class, 'save']);
