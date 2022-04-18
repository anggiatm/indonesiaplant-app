<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PromoController;
use App\Models\Cart;

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

// USERS PUBLIC
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout']);

// PRODUCTS PUBLIC
Route::get('/products', [ProductController::class, 'index']);
Route::get('products/search/{name}', [ProductController::class, 'search']);
// PRODUCTS PROTECTED
Route::middleware('auth:sanctum')->post('/products', [ProductController::class, 'store']);
Route::middleware('auth:sanctum')->put('/products/{id}', [ProductController::class, 'update']);
Route::middleware('auth:sanctum')->delete('/products/{id}', [ProductController::class, 'destroy']);

// CART PUBLIC
// CART PROTECTED
Route::middleware('auth:sanctum')->get('my-cart/{id}', [CartController::class, 'index']);
Route::middleware('auth:sanctum')->put('my-cart-update/{id}', [CartController::class, 'update']);
Route::middleware('auth:sanctum')->post('my-cart-store/{id}', [CartController::class, 'store']);
Route::middleware('auth-sanctum')->delete('my-cart', [CartController::class, 'destroy']);