<?php

use App\Http\Controllers\BorrarElementoController;
use App\Http\Controllers\ElementController;
use App\Http\Controllers\CrearElementoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); });

Route::get('element', [ElementController::class, "index"])->name('test');

Route::get('element/crear', [CrearElementoController::class, "create"])->name('element.create');
Route::post('element/store', [CrearElementoController::class, "store"])->name('element.store');

Route::get('element/{id?}/edit', [ElementController::class, "edit"])->name('element.edit');

Route::patch('element/{id?}', [ElementController::class, "update"])->name('element.update');

Route::delete('element/{id?}', [BorrarElementoController::class, "destroy"])->name('element.destroy');

Route::get('element/{id?}', [ElementController::class, "show"])->name('detail');

// Route::contacto
