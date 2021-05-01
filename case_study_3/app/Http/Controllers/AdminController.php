<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;




class AdminController extends Controller
{
    //

    public function showAdmin()
    {
        // if (auth()->check()) {
        //     return redirect()->route('categories.index');
        // }
        return view('login');
    }

    public function loginAdmin(Request $request)
    {
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            return redirect()->route('categories.index');
        } else {

            Session::flash('failed', 'Email or Password is not correct. Please try again');
            return redirect()->back();
        }
    }
}
