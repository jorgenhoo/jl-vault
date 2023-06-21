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
Route::get('/contas', [ContaController::class, 'contas'])->middleware('auth');
Route::get('/show/{id}', [ContaController::class, 'show'])->middleware('auth');
Route::get('/contas/adicionar', [ContaController::class, 'adicionar'])->middleware('auth');
Route::get('/contas/{id}', [ContaController::class, 'editar'])->middleware('auth');


Route::delete('contas/{id}', [ContaController::class, 'destroy'])->middleware('auth');
Route::post('contas/put', [ContaController::class, 'put'])->middleware('auth');
Route::post('/contas/store', [ContaController::class, 'store'])->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
