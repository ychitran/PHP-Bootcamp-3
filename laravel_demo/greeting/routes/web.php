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

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (Illuminate\Http\Request $request) {
    if (
        $request->username == 'admin'
        && $request->password == 'admin'
    ) {
        return view('welcome_admin');
    }

    return view('login_error');
});

Route::get('/product', function () {
    return view('product_discount');
});

Route::post('/product', function (Illuminate\Http\Request $request) {


    $discountAmount = $request->price * $request->percent * 0.1;
    $discountPrice = $request->price - $discountAmount;
    return view('product_display', compact(['discountPrice', 'discountAmount']));
});

Route::get('/dictionary', function () {
    return view('dictionary');
});

Route::post('/dictionary', function (Illuminate\Http\Request $request) {
    $search = $request->search;
    $flag = 0;
    $dictionary = array("hello" => "xin chào", "speak" => "nói", "sleep" => "ngủ", "music" => "âm nhạc");
    foreach ($dictionary as $word => $value) {
        if ($search == $word) {
            echo "Từ " . $word . " có nghĩa là " . $value;
            $flag = 1;
        }
    }
    if ($flag == 0) {
        echo "Không tìm thấy từ cần tra";
    }

    return view('dictionary');
});
