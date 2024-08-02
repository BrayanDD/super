<?php

use App\Http\Controllers\CarritoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SeccionController;
use App\Models\Carrito;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Secciones de la empresa
Route::get('/secciones',[SeccionController::class,'index'])->name('seccion.index');
Route::get('/secciones/create',[SeccionController::class,'create'])->name('seccion.create');
Route::post('/secciones',[SeccionController::class,'store'])->name('seccion.store');
Route::get('/secciones/{seccion}',[SeccionController::class,'show'])->name('seccion.show');

//Productos
Route::get('/products/create/{seccion_id}', [ProductController::class, 'create'])->name('product.create');
Route::post('/products', [ProductController::class, 'store'])->name('product.store');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('product.show');


//Carrito

Route::get('/carritos',[CarritoController::class, 'index'])->name('carrito.index');
Route::get('/carritos/{carrito}/edit',[CarritoController::class, 'edit'])->name('carrito.edit');
Route::post('/carritos',[CarritoController::class, 'store'])->name('carrito.store');
Route::delete('/carritos/{carrito}/',[CarritoController::class, 'destroy'])->name('carritos.destroy');
