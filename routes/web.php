<?php

namespace App\Http\Controllers;
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

//Categorias Rutas
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
Route::put('/category/{id}/update', [CategoryController::class, 'update'])->name('category.update');
Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::delete('/category/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');

//Productos Rutas
Route::get('/product', [ProductsController::class, 'index'])->name('product.index');
Route::get('/product/add', [ProductsController::class, 'create'])->name('product.create');
Route::post('/product', [ProductsController::class, 'store'])->name('product.store');
Route::put('/product/{id}/update', [ProductsController::class, 'update'])->name('product.update');
Route::get('/product/{id}/edit', [ProductsController::class, 'edit'])->name('product.edit');
Route::delete('/product/{product}', [ProductsController::class, 'destroy'])->name('product.destroy');

//Sales Rutas
Route::get('/sales', [SalesController::class, 'index'])->name('sales.index');
Route::get('/sales/add', [SalesController::class, 'create'])->name('sales.create');
Route::post('/sales', [SalesController::class, 'store'])->name('sales.store');
Route::put('/sales/{id}/update', [SalesController::class, 'update'])->name('sales.update');
Route::get('/sales/{id}/edit', [SalesController::class, 'edit'])->name('sales.edit');
Route::delete('/sales/{venta}', [SalesController::class, 'edit'])->name('sales.edit');

//DetailSales Rutas
Route::get('/details', [DetailSalesController::class, 'index'])->name('details.index');
Route::get('/details/add', [DetailSalesController::class, 'create'])->name('details.create');
Route::post('/details', [DetailSalesController::class, 'store'])->name('details.store');
Route::put('/details/{id}/update', [DetailSalesController::class, 'update'])->name('details.update');
Route::get('/details/{id}/edit', [DetailSalesController::class, 'edit'])->name('details.edit');
Route::delete('/details/{detailSales}', [DetailSalesController::class, 'destroy'])->name('details.destroy');

//User rutas
Route::get('/clients', [UserController::class, 'index'])->name('clients.index');
Route::get('/clients/add', [UserController::class, 'create'])->name('clients.create');
Route::post('/clients', [UserController::class, 'store'])->name('clients.store');
Route::put('/clients/{id}/update', [UserController::class, 'update'])->name('clients.update');
Route::get('/clients/{id}/edit', [UserController::class, 'edit'])->name('clients.edit');
Route::delete('/clients/{user}', [UserController::class, 'destroy'])->name('clients.destroy');