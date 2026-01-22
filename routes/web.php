<?php

use App\Http\Controllers\PrendaController; 
use Illuminate\Support\Facades\Route;


Route::get('/', [PrendaController::class, 'index'])->name('prendas.index');
Route::get('/prendas/create', [PrendaController::class, 'create'])->name('prendas.create');
Route::post('/prendas', [PrendaController::class, 'store'])->name('prendas.store');
Route::get('/prendas/{id}', [PrendaController::class, 'show'])->name('prendas.show');
Route::get('/prendas/{id}/edit', [PrendaController::class, 'edit'])->name('prendas.edit');
Route::put('/prendas/{id}', [PrendaController::class, 'update'])->name('prendas.update');
Route::get('/prendas/confirm/{id}', [PrendaController::class, 'confirmDelete'])->name('prendas.confirmDelete');
Route::delete('/prendas/{id}', [PrendaController::class, 'destroy'])->name('prendas.destroy');
