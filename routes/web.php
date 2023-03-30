<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    return view('welcome');
});


Route::controller(ProductController::class)->group(function () {
    Route::get('/orders', 'index');
    Route::get('/orders/{id}', 'show');
    Route::post('/orders', 'store');
    Route::put('/orders/{id}', 'update');
    Route::get('/orders/{id}/delete', 'delete');
    Route::get('/orders/{id}/edit', 'edit');
    Route::get('/orders/create', 'create');


});


//Route::get('/products', [ProductController::class, 'index'])->name('products.index');
