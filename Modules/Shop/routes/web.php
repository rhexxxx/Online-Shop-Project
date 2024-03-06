<?php

use Illuminate\Support\Facades\Route;
use Modules\Shop\App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/category/{categorySlug}', [ProductController::class, 'category'])->name('products.category');
Route::get('/tag/{categorySlug}', [ProductController::class, 'tag'])->name('products.tag');
Route::get('/{categorySlug}/{productSlug}', [ProductController::class, 'show'])->name('products.show');


Route::prefix('shop')->group(function() {
    Route::get('/', 'ShopController@index');
});