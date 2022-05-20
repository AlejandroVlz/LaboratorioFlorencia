<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CuentaController;
use App\Http\Controllers\VerCuentasController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\EstudiosController;
use App\Http\Controllers\EstudiosPendientesController;
use App\Http\Controllers\VerEstudiosController;
use App\Http\Controllers\BusquedaController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\EstudiosventasController;
use App\Http\Controllers\FotoController;







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

Route::get('/', function () {
    return view('welcome');
});


/***Direcciones Administradores*/


Route::get('/registro', [RegisterController::class, 'index'])->name('registro.index')->middleware(['auth', 'auth.rol']);
Route::post('/registro', [RegisterController::class, 'store'])->name('registro.store')->middleware(['auth', 'auth.rol']);


Route::get('/login', [LoginController::class, 'index'])->name('login.index')->middleware('guest');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');


Route::get('/VerCuentas', [VerCuentasController::class, 'index'])->name('ver.index')->middleware(['auth', 'auth.rol']);
Route::get('/VerCuentas/{cuenta}', [VerCuentasController::class, 'edit'])->name('vercuentas.edit')->middleware(['auth', 'auth.rol']);
Route::put('/ActualizarCuentas/{cuenta}', [VerCuentasController::class, 'update'])->name('vercuentas.update')->middleware(['auth', 'auth.rol']);
Route::delete('/Eliminar/{cuenta}', [VerCuentasController::class, 'destroy'])->name('vercuentas.destroy')->middleware(['auth', 'auth.rol']);




Route::get('/registro/estudios', [EstudiosController::class, 'index'])->name('estudios.index')->middleware(['auth', 'auth.rol']);

Route::post('/registro/store', [EstudiosController::class, 'store'])->name('estudios.store')->middleware(['auth', 'auth.rol']);

Route::get('/registro/show/{id}', [EstudiosController::class, 'show'])->name('estudios.show')->middleware(['auth', 'auth.rol']);




Route::get('/estudios/pendientes', [EstudiosPendientesController::class, 'index'])->name('estudios_pendientes.index')->middleware(['auth', 'auth.rol']);
Route::get('/estudios/pendientes/{usuario_id}/editar', [EstudiosPendientesController::class, 'edit'])->name('estudios.pendietes.edit')->middleware(['auth', 'auth.rol']);
Route::put('/pendientes/{usuario_id}/editar', [EstudiosPendientesController::class, 'update'])->name('estudios.pendietes.update')->middleware('auth');





Route::get('/buscar', [BusquedaController::class, 'index'])->name('buscar.index')->middleware(['auth', 'auth.rol']);
Route::get('/buscar/estudio', [BusquedaController::class, 'estudio'])->name('buscar.estudio')->middleware(['auth', 'auth.rol']);

Route::delete('/eliminar/estudio/{resultado}', [BusquedaController::class, 'destroy'])->name('buscar.destroy')->middleware('auth');



/***Vistas usuarios*/

Route::get('/datos', [CuentaController::class, 'index'])->name('datos.index')->middleware('auth');
Route::post('/datos', [CuentaController::class, 'store'])->name('datos.store');

Route::get('editar/{cuenta}/cuenta', [CuentaController::class, 'edit'])->name('datos.edit')->middleware('auth');
Route::put('editar/{cuenta}', [CuentaController::class, 'update'])->name('datos.update');

Route::get('/perfil', [PerfilController::class, 'index'])->name('perfil.index')->middleware('auth');






Route::get('/ver/estudios', [VerEstudiosController::class, 'index'])->name('ver_estudios.index')->middleware('auth');










/**graficas */
Route::get('/Grafica', [EstudiosventasController::class, 'index'])->name('grafica.index');


/**Foto de perfol */


Route::get('/Foto', [FotoController::class, 'index'])->name('foto.index');
Route::post('/Foto/store', [FotoController::class, 'store'])->name('foto.store');

