<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::resource('pages', PageController::class);

Route::get('/empresas', [App\Http\Controllers\EmpresasController::class, 'index'])->name('empresa.index');
Route::get('/empresas/create', [App\Http\Controllers\EmpresasController::class, 'create'])->name('empresas.create');
Route::get('/empresas/store', [App\Http\Controllers\EmpresasController::class, 'store'])->name('empresas.store');
Route::get('/empresas/show/{id}', [App\Http\Controllers\EmpresasController::class, 'show'])->name('empresas.show');
Route::get('/empresas/edit/{id}', [App\Http\Controllers\EmpresasController::class, 'edit'])->name('empresas.edit');
Route::get('/empresas/update/{id}', [App\Http\Controllers\EmpresasController::class, 'update'])->name('empresas.update');
Route::get('/empresas/delete/{id}', [App\Http\Controllers\EmpresasController::class, 'delete'])->name('empresas.delete');


Route::get('/series', [App\Http\Controllers\EmpresasController::class, 'index'])->name('empresas.index');
Route::get('/series/create', [App\Http\Controllers\EmpresasController::class, 'create'])->name('series.create');
Route::get('/series/store', [App\Http\Controllers\EmpresasController::class, 'store'])->name('series.store');
Route::get('/series/show/{id}', [App\Http\Controllers\EmpresasController::class, 'show'])->name('series.show');
Route::get('/series/edit/{id}', [App\Http\Controllers\EmpresasController::class, 'edit'])->name('series.edit');
Route::get('/series/update/{id}', [App\Http\Controllers\EmpresasController::class, 'update'])->name('series.update');
Route::get('/series/delete/{id}', [App\Http\Controllers\EmpresasController::class, 'delete'])->name('series.delete');
 







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
