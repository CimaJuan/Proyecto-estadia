<?php

use App\Http\Controllers\RegistrosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

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
    return view('auth/login');
});


Route::view('/inicio', 'Inicio')->name('inicio')->middleware('auth');


Route::post('/inicio', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/detalles/{id}/pdf_detalles',[RegistrosController::class,'pdf'])->middleware('auth');

Route::get('/registros',[RegistrosController::class,'index'])->middleware('auth');
Route::get('/formulario',[RegistrosController::class,'create'])->name('formulario')->middleware('auth');
Route::post('/registros',[RegistrosController::class,'store'])->name('registros')->middleware('auth');
Route::get('/registros/{id}/detalles',[RegistrosController::class,'show'])->middleware('auth');
Route::get('/registros/{id}/formulario_edit',[RegistrosController::class,'edit'])->middleware('auth');
Route::put('/registros{id}',[RegistrosController::class,'update'])->middleware('auth');
Route::delete('/registros{id}',[RegistrosController::class,'destroy'])->middleware('auth');


Auth::routes();

Route::get('/inicio', [HomeController::class, 'index'])->name('inicio')->middleware('auth');


Route::get('/registros/export/', [RegistrosController::class, 'export'])->name('registros-export')->middleware('auth');


