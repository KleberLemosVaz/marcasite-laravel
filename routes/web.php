<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProposalController;

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

Auth::routes();
Route::get('/', function () {
    return view('index');
})->middleware('auth');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/clientes',[ClientController::class, 'index'])->middleware('auth');
Route::get('/clientes/novo',[ClientController::class, 'create'])->middleware('auth');
Route::post('/clientes', [ClientController::class, 'store'])->middleware('auth');
Route::get('/clientes/editar/{id}', [ClientController::class, 'edit'])->middleware('auth');
Route::post('/clientes/{id}', [ClientController::class, 'update'])->middleware('auth');

Route::get('/propostas',[ProposalController::class, 'index'])->middleware('auth');
Route::get('/propostas/novo',[ProposalController::class, 'create'])->middleware('auth');
Route::post('/propostas', [ProposalController::class, 'store'])->middleware('auth');
Route::get('/propostas/editar/{id}', [ProposalController::class, 'edit'])->middleware('auth');
Route::post('/propostas/{id}', [ProposalController::class, 'update'])->middleware('auth');
Route::get('propostas/export/', [ProposalController::class, 'export'])->middleware('auth');
Route::get('/search', [ProposalController::class, 'search'])->middleware('auth');



