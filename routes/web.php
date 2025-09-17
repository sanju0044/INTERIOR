<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/product-categorys', function () {
    return view('product-category');
});

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/product-range/{id}', [\App\Http\Controllers\HomeController::class, 'productRange']);
Route::get('/products-details/{id}', [\App\Http\Controllers\HomeController::class, 'productDetails']);
Route::get('/details/{id}', [\App\Http\Controllers\HomeController::class, 'getDetails']);

Route::get('gallery', [\App\Http\Controllers\GalleryController::class, 'show']);


Route::get('/product-ranges/{id}', [\App\Http\Controllers\ProductController::class, 'getProductRange']);
Route::get('/product-details/{id}', [\App\Http\Controllers\ProductController::class, 'getProductDetails']);

#Contact List
Route::get('/contact-list', [ContactController::class, 'index']);
Route::post('/contact_submit', [ContactController::class, 'store']);

#Product Category
Route::get('/product-category', [\App\Http\Controllers\ProductCategoryController::class, 'index']);
Route::post('/save-product-category', [\App\Http\Controllers\ProductCategoryController::class, 'store']);
Route::get('cat/edit/{id}', [\App\Http\Controllers\ProductCategoryController::class, 'edit']);
Route::get('/delete/{id}', [\App\Http\Controllers\ProductCategoryController::class, 'destroy']);

#Provide Solution
Route::get('/provide-solution', [\App\Http\Controllers\ProvideSolutionController::class, 'index']);
Route::post('/save', [\App\Http\Controllers\ProvideSolutionController::class, 'store']);
Route::get('sol/edit/{id}', [\App\Http\Controllers\ProvideSolutionController::class, 'edit']);
Route::get('/delete/{id}', [\App\Http\Controllers\ProvideSolutionController::class, 'destroy']);

#Products
Route::get('/product', [\App\Http\Controllers\ProductController::class, 'index']);
Route::post('/product_save', [\App\Http\Controllers\ProductController::class, 'store']);
Route::get('/edit/{id}', [\App\Http\Controllers\ProductController::class, 'edit']);
// Route::get('/delete/{id}', [\App\Http\Controllers\ProductController::class, 'destroy']);

#Gallery
Route::get('/add-gallery', [\App\Http\Controllers\GalleryController::class, 'index']);
Route::post('/save-gallery', [\App\Http\Controllers\GalleryController::class, 'store']);
Route::get('/delete/{id}', [\App\Http\Controllers\GalleryController::class, 'destroy']);

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', function () {return view('admin.index');})->name('dashboard');
});
