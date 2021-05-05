<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductController;
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
// ------------------------Frontend---------------------------
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('frontend.home.home');
});
Route::get('/about', function () {
    return view('frontend.about.about');
});
Route::get('/shop', function () {
    return view('frontend.shop.shop');
});


//=============================Backend==================================
// Login Backend Start
Route::get('/admin', [AdminController::class, 'showAdmin']);
Route::post('/admin', [AdminController::class, 'loginAdmin']);
// Login Backend End

//------Category Backend Start-----
Route::group(['prefix' => 'categories'], function () {
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('create', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::post('/{id}/edit', [CategoryController::class, 'update'])->name('categories.update');
    Route::get('/{id}/destroy', [CategoryController::class, 'destroy'])->name('categories.destroy');
});

// Category Backend End

// Menu Backend Start
Route::group(['prefix' => 'menus'], function () {
    Route::get('/', [MenuController::class, 'index'])->name('menus.index');
    Route::get('/create', [MenuController::class, 'create'])->name('menus.create');
    Route::post('create', [MenuController::class, 'store'])->name('menus.store');
    Route::get('/{id}/edit', [MenuController::class, 'edit'])->name('menus.edit');
    Route::post('/{id}/edit', [MenuController::class, 'update'])->name('menus.update');
    Route::get('/{id}/destroy', [MenuController::class, 'destroy'])->name('menus.destroy');
});

// Menu Backend End

// Product Backend Start
Route::group(['prefix' => 'products'], function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('create', [ProductController::class, 'store'])->name('products.store');
});
// Product Backend End
