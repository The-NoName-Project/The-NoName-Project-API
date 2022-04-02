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
Route::get('/categories', [ApiCategoryController::class, 'index']);
Route::post('/categories/store', [ApiCategoryController::class, 'store']);
Route::get('/categories/{categories}', [ApiCategoryController::class, 'show']);
Route::get('/categories/edit/{id}', [ApiCategoryController::class, 'edit']);
Route::put('/categories/update/{id}', [ApiCategoryController::class, 'update']);
Route::delete('/categories/delete/{id}', [ApiCategoryController::class, 'destroy']);

        // * Rutas de la api para productos
Route::get('/products', [ApiProductsController::class, 'index']);
Route::post('/products/store', [ApiProductsController::class, 'store']);
Route::get('/products/{products}', [ApiProductsController::class, 'show']);
Route::get('/products/edit/{id}', [ApiProductsController::class, 'edit']);
Route::put('/products/update/{id}', [ApiProductsController::class, 'update']);
Route::delete('/products/delete/{id}', [ApiProductsController::class, 'destroy']);

        // * Rutas de la api para ventas
Route::get('/sales',[ApiSalesController::class, 'index']);
Route::post('/sales/store',[ApiSalesController::class, 'store']);
Route::get('/sales/{sale}',[ApiSalesController::class, 'show']); //Mostrar una sola venta
Route::get('/sales/edit/{id}',[ApiSalesController::class, 'edit']);
Route::put('/sales/update/{id}',[ApiSalesController::class, 'update']);
Route::delete('/sales/delete/{id}',[ApiSalesController::class, 'destroy']);

        // * Rutas de la api para detalles de ventas
Route::get('/detailsales',[ApiDetailSalesController::class, 'index']);
Route::post('/detailsales/store',[ApiDetailSalesController::class, 'store']);
Route::get('/detailsales/{deta}',[ApiDetailSalesController::class, 'show']);
Route::get('/detailsales/edit/{id}',[ApiDetailSalesController::class, 'edit']);
Route::put('/detailsales/update/{id}',[ApiDetailSalesController::class, 'update']);
Route::delete('/detailsales/delete/{id}',[ApiDetailSalesController::class, 'destroy']);        

//Rutas de la api para el login de usuarios y restablecer contraseña
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::post('/reset-password', [AuthController::class, 'resetPassword']);
Route::get('/users', [AuthController::class, 'showAll']);
Route::get('/users/{id}', [AuthController::class, 'showOne']);
Route::put('/users/update/{id}', [AuthController::class, 'update']);