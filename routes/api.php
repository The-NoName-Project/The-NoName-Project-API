<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

        // * Rutas de la api para categorias
Route::get('/categories', [CategoryController::class, 'index']);
Route::post('/categories/store', [CategoryController::class, 'store']);
Route::get('/categories/{categories}', [CategoryController::class, 'show']);
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit']);
Route::put('/categories/{id}/update', [CategoryController::class, 'update']);
Route::delete('/categories/{id}/delete', [CategoryController::class, 'destroy']);

        // * Rutas de la api para productos
Route::get('/products', [ProductsController::class, 'index']);
Route::post('/products/store', [ProductsController::class, 'store']);
Route::get('/products/{products}', [ProductsController::class, 'show']);
Route::get('/products/{id}/edit', [ProductsController::class, 'edit']);
Route::put('/products/{id}/update', [ProductsController::class, 'update']);
Route::delete('/products/{id}/delete', [ProductsController::class, 'destroy']);

        // * Rutas de la api para usuarios
// Route::get('/clients', [UserController::class, 'index']);
// Route::post('/clients',[UserController::class, 'store']);
// Route::get('/clients/{user}',[UserController::class, 'show']);
// Route::get('/clients/{id}',[UserController::class, 'edit']);
// Route::put('/clients/{id}',[UserController::class, 'update']);
// Route::delete('/clients/{id}',[UserController::class, 'destroy']);

        // * Rutas de la api para ventas
Route::get('/sales',[SalesController::class, 'index']);
Route::post('/sales/store',[SalesController::class, 'store']);
Route::get('/sales/{sale}',[SalesController::class, 'show']); //Mostrar una sola venta
Route::get('/sales/{id}/edit',[SalesController::class, 'edit']);
Route::put('/sales/{id}/update',[SalesController::class, 'update']);
Route::delete('/sales/{id}/delete',[SalesController::class, 'destroy']);

        // * Rutas de la api para detalles de ventas
Route::get('/detailsales',[DetailSalesController::class, 'index']);
Route::post('/detailsales/store',[DetailSalesController::class, 'store']);
Route::get('/detailsales/{deta}',[DetailSalesController::class, 'show']);
Route::get('/detailsales/{id}/edit',[DetailSalesController::class, 'edit']);
Route::put('/detailsales/{id}/update',[DetailSalesController::class, 'update']);
Route::delete('/detailsales/{id}/delete',[DetailSalesController::class, 'destroy']);        

//Rutas de la api para el login de usuarios
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);