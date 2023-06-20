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
Route::get('/show/{id}', [ContaController::class, 'show']);
Route::get('/contas/adicionar', [ContaController::class, 'adicionar']);
Route::get('/contas/{id}', [ContaController::class, 'editar']);


Route::delete('contas/{id}', [ContaController::class, 'destroy']);
Route::post('contas/put', [ContaController::class, 'put']);
Route::post('/contas/store', [ContaController::class, 'store']);
