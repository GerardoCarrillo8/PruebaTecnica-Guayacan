<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;


Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/prueba', [ClienteController::class, 'pruebaIndex'])->name('prueba.index');

Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');

Route::get('/clientes/{cliente}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');

Route::patch('/clientes/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');

Route::delete('/clientes/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
