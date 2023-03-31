<?php

use App\Http\Controllers\LibrosController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('libro/{libro}/ver', [LibrosController::class, 'show'])->name('libro.show');
Route::get('libro/registrar', [LibrosController::class, 'create'])->name('libro.create');
Route::post('libro/guardar', [LibrosController::class, 'store'])->name('libro.store');
Route::get('libro/listar', [LibrosController::class, 'index'])->name('libro.index');
Route::get('libro/{libro}/editar', [LibrosController::class, 'edit'])->name('libro.edit');
Route::put('libro/{libro}/actualizar', [LibrosController::class, 'update'])->name('libro.update');
Route::delete('libro/{libro}/eliminar', [LibrosController::class, 'destroy'])->name('libro.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
