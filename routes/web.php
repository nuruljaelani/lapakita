<?php

use App\Http\Controllers\Backsite\CategoryController;
use App\Http\Controllers\Backsite\ChildcategoryController;
use App\Http\Controllers\Backsite\DashboardController;
use App\Http\Controllers\Backsite\SubcategoryController;
use App\Http\Controllers\Frontsite\FrontsiteController;
use App\Http\Controllers\Frontsite\SellerController;
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

Route::domain('seller.ecommerce-app.test')
    ->controller(SellerController::class)
    ->name('seller.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
    });

Route::controller(FrontsiteController::class)->name('frontsite.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::get('/produk/detail', 'detailProduct')->name('detail-product');
    Route::get('/cart', 'cart')->name('cart');
    Route::get('/c/produk', 'pCategory')->name('pCategory');
    Route::get('/member/profile', 'profile')->name('profile');
});

Route::name('backsite.')->prefix('backsite')->group(function () {
    Route::controller(DashboardController::class)->name('dashboard.')->group(function () {
        Route::get('/dashboard', 'index')->name('index');
    });
    Route::controller(CategoryController::class)->name('category.')->group(function () {
        Route::get('/category', 'index')->name('index');
        Route::post('/category/store', 'store')->name('store');
        Route::get('/category/{id}/edit', 'edit')->name('edit');
        Route::put('/category/update/{id}', 'update')->name('update');
        Route::delete('/category/delete/{id}', 'destroy')->name('delete');
        Route::get('/category/datatable', 'datatable')->name('datatable');
    });

    Route::controller(SubcategoryController::class)->name('subcategory.')->group(function () {
        Route::get('/subcategory', 'index')->name('index');
        Route::post('/subcategory/store', 'store')->name('store');
        Route::get('/subcategory/{id}/edit', 'edit')->name('edit');
        Route::put('/subcategory/update/{id}', 'update')->name('update');
        Route::delete('/subcategory/delete/{id}', 'destroy')->name('delete');
        Route::get('/subcategory/datatable', 'datatable')->name('datatable');
    });

    Route::controller(ChildcategoryController::class)->name('childcategory.')->group(function () {
        Route::get('/childcategory', 'index')->name('index');
        Route::post('/childcategory/store', 'store')->name('store');
        Route::get('/childcategory/{id}/edit', 'edit')->name('edit');
        Route::put('/childcategory/update/{id}', 'update')->name('update');
        Route::delete('/childcategory/delete/{id}', 'destroy')->name('delete');
        Route::get('/childcategory/datatable', 'datatable')->name('datatable');
    });
});
