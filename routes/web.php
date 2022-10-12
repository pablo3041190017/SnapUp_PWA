<?php

use Illuminate\Support\Facades\Route;

/* |-------------------------------------------------------------------------- | Web Routes |-------------------------------------------------------------------------- | | Here is where you can register web routes for your application. These | routes are loaded by the RouteServiceProvider within a group which | contains the "web" middleware group. Now create something great! | */

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class , 'index'])->name('home');
    Route::get('/roles', [App\Http\Controllers\RoleController::class , 'index']);
    Route::get('/guardar-rol', [App\Http\Controllers\RoleController::class , 'save']);
    Route::get('/actualizar-rol/{id}', [App\Http\Controllers\RoleController::class , 'update']);
    Route::get('/borrar-rol/{id}', [App\Http\Controllers\RoleController::class , 'delete']);
});

Route::get('/actividades', [App\Http\Controllers\ActividadController::class , 'index']);
Route::get('/guardar-act', [App\Http\Controllers\ActividadController::class , 'save']);
Route::get('/actualizar-act/{id}', [App\Http\Controllers\ActividadController::class , 'update']);
Route::get('/borrar-act/{id}', [App\Http\Controllers\ActividadController::class , 'delete']);