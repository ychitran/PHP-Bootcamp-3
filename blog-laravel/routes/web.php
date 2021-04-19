<?php

use App\Http\Controllers\BlogsController;
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

Route::get('/', [BlogsController::class, 'index'])->name('blogs.index');

Route::group(['prefix' => 'admin'], function () {
    Route::get('login', [BlogsController::class, 'login']);
});
