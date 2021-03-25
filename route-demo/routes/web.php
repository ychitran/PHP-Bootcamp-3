<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', function () {
    echo "<h3>This is About Page</h3>";
});

Route::get('/contact', function () {
    echo "<h3>This is Contact Page</h3>";
});

Route::get('/user/{name?}', function ($name = 'Ychi') {
    echo "<h2>Hello $name</h2>";
});
