<?php

use Illuminate\Support\Facades\Route;

/* HomePage */
use App\Http\Controllers\Inicio;

/* Alumno */
use App\Http\Controllers\AlumnoController;

/* Profesor */
use App\Http\Controllers\ProfesorController;

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

/* Route::get('/bienvenida', function () {
    return view('index');
});
 */

Route::get('/',[Inicio::class,'index'])->name('bienvenida.index');

Route::get('/alumno',[AlumnoController::class,'index'])->name('alumno.alumno');

Route::get('/alumno/alumno',[AlumnoController::class,'propuesta'])->name('alumno.propuesta');

Route::get('/profesor',[ProfesorController::class,'index'])->name('profesor.profesor');