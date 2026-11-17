<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    return view('pages.about', [
        'nama' => 'Muhamad Nuriza Ali',
        'kelas' => 'D4SM-48-02',
        'nim' => '707082400045',
    ]);
});

Route::view('/contact', 'pages.contact');

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/addProduct', [ProductController::class, 'addProduct']);
Route::post('/product', [ProductController::class, 'store']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::get('/product/{id}/edit', [ProductController::class, 'edit']);
Route::put('/product/{id}', [ProductController::class, 'update']);
Route::delete('/product/{id}', [ProductController::class, 'destroy']);
Route::resource('/category', CategoryController::class);