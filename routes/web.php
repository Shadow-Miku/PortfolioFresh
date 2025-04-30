<?php

use Illuminate\Support\Facades\Route;

/* Portafolio */
Route::get('/', function () {
    return view('welcome');
});

Route::get('/resume', function () {
    return view('resume');
});

Route::get('/proyectos', function () {
    return view('proyectos');
});

Route::get('/contacto', function () {
    return view('contacto');
});

/* Portafolio con proyectos cargados de la BD */
Route::get('/portafolio', [App\Http\Controllers\PortafolioDin::class, 'portafolio'])->name('portafolio');

/* Rutas de administrador */
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/proyectos.list', [App\Http\Controllers\ProyectoController::class, 'index'])->name('proyectos.list');

Route::get('/proyectos.createProy', [App\Http\Controllers\ProyectoController::class, 'create'])->name('proyectos.createProy');

Route::post('/proyectos.store', [App\Http\Controllers\ProyectoController::class, 'store'])->name('proyectos.store');

Route::get('/proyectos/{proyecto}/edit', [App\Http\Controllers\ProyectoController::class, 'edit'])->name('proyectos.editProy');

Route::put('/proyectos/{proyecto}', [App\Http\Controllers\ProyectoController::class, 'update'])->name('proyectos.update');

