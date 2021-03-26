<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('customer')->group(function () {
    Route::get('index', function () {
        // Hiển thị danh sách khách hàng

    });

    Route::get('create', function () {
        //Hiển thị form tạo khách hàng
        return view('create');
    });

    Route::post('store', function (\Illuminate\Http\Request $request) {
        //Xử lý lưu dữ liệu tạo khách hàng thông qua POST

    });

    Route::get('{id}/show', function () {
        //Lấy chi tiết khách hàng có id là...
    });

    Route::get('{id}/edit', function () {
        //Chỉnh sửa khách hàng có id là...
    });

    Route::patch('{id}/update', function () {
        //Xử lý lưu dữ liệu khách hàng được cập nhật từ form
    });

    Route::delete('{id}/delete', function () {
        //Xoá khách hàng có id l
    });
});
