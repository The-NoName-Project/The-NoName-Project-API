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
Route::post('/categories', [CategoryController::class, 'store']);
Route::get('/categories', [CategoryController::class, 'show']);
Route::get('/categories/{id}', [CategoryController::class, 'edit']);
Route::put('/categories/{id}', [CategoryController::class, 'update']);
Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);

        // * Rutas de la api para productos
Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductsController::class, 'store']);
Route::get('/products', [ProductsController::class, 'show']);
Route::get('/products/{id}', [ProductsController::class, 'edit']);
Route::put('/products/{id}', [ProductsController::class, 'update']);
Route::delete('/products/{id}', [ProductsController::class, 'destroy']);

        // * Rutas de la api para usuarios
Route::get('/clients', [UserController::class, 'index']);
Route::post('/clients',[UserController::class, 'store']);
Route::get('/clients',[UserController::class, 'show']);
Route::get('/clients/{id}',[UserController::class, 'edit']);
Route::put('/clients/{id}',[UserController::class, 'update']);
Route::delete('/clients/{id}',[UserController::class, 'destroy']);

        // * Rutas de la api para ventas
Route::post('/sales',[SalesController::class, 'store']);
Route::get('/sales',[SalesController::class, 'index']);
Route::get('/sales/{id}',[SalesController::class, 'show']); //Mostrar una sola venta
Route::get('/sales/{id}',[SalesController::class, 'edit']);
Route::put('/sales/{id}',[SalesController::class, 'update']);
Route::delete('/sales/{id}',[SalesController::class, 'destroy']);

        // * Rutas de la api para detalles de ventas
Route::post('/detailsales',[DetailSalesController::class, 'store']);
Route::get('/detailsales',[DetailSalesController::class, 'index']);
Route::get('/detailsales/{id}',[DetailSalesController::class, 'show']);
Route::get('/detailsales/{id}',[DetailSalesController::class, 'edit']);
Route::put('/detailsales/{id}',[DetailSalesController::class, 'update']);
Route::delete('/detailsales/{id}',[DetailSalesController::class, 'destroy']);        

//Rutas de la api para el login de usuarios
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);