<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Auth; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


require __DIR__.'/auth.php';

use App\Http\Controllers\ClienteController;
use App\Models\Cliente;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/formulario', [ClienteController::class, 'create'])->name('clientes.create');
    Route::post('/dashboard/formulario', [ClienteController::class, 'store'])->name('clientes.store');
    Route::get('/dashboard/consultar', [ClienteController::class, 'index'])->name('clientes.index');
    Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
    Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
    Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
});
