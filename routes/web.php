<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SpecieController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WishlistController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return view('website.components.wishlist');
});

    Route::get('/', [MainController::class, 'landing'])->name('main.landing');
    Route::get('/about', [MainController::class, 'about'])->name('main.about');
    Route::get('/shop', [MainController::class, 'shop'])->name('main.shop');
    Route::get('/contact', [MainController::class, 'contact'])->name('main.contact');
    Route::get('/product/{id}', [MainController::class, 'product'])->name('main.product');
    // wishlist
    Route::post('/add-to-cache', [WishlistController::class, 'addToCache'])->name('wishlist.addToCache');
    Route::delete('/delete-from-cache/{id}', [WishlistController::class, 'deleteFromCache'])->name('wishlist.deleteFromCache');
    Route::get('/wishlist', [WishlistController::class, 'index'])->name('main.index');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    // category
    Route::get('/admin/categories', [CategoryController::class, 'index'])->name('admin.category.index');
    Route::post('/admin/store/category', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::put('/admin/category/edit/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::delete('/admin/category/delete/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');

    // brand
    Route::get('/admin/brands', [BrandController::class, 'index'])->name('admin.brand.index');
    Route::post('/admin/store/brand', [BrandController::class, 'store'])->name('admin.brand.store');
    Route::put('/admin/brand/edit/{id}', [BrandController::class, 'update'])->name('admin.brand.update');
    Route::delete('/admin/brand/delete/{id}', [BrandController::class, 'destroy'])->name('admin.brand.destroy');

    // specie
    Route::get('/admin/species/{id}', [SpecieController::class, 'index'])->name('admin.specie.index');
    Route::post('/admin/store/specie/{id}', [SpecieController::class, 'store'])->name('admin.specie.store');
    Route::put('/admin/specie/edit/{id}', [SpecieController::class, 'update'])->name('admin.specie.update');
    Route::delete('/admin/specie/delete/{id}', [SpecieController::class, 'destroy'])->name('admin.specie.destroy');

    // product
    Route::get('/admin', [ProductController::class, 'index'])->name('admin.product.index');
    Route::get('/dashboard', [ProductController::class, 'index'])->name('admin.product.index');
    Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.product.index');
    Route::post('/admin/store/product', [ProductController::class, 'store'])->name('admin.product.store');
    Route::put('/admin/product/edit/{id}', [ProductController::class, 'update'])->name('admin.product.update');
    Route::delete('/admin/product/delete/{id}', [ProductController::class, 'destroy'])->name('admin.product.destroy');
});
