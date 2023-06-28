<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    function login() {
        return view('front.account.login');
    }

    function checkLogin(Request $request) {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'level' =>  2, // Tài khoản cấp độ khách hàng bình thường.
        ];


        if (Auth::attempt($credentials)) {
            return redirect('./');
        }else {
            return back()->with('notification', 'Error: Email or password is wrong');
        }
    }

    function logout() {
        Auth::logout();

        return redirect('');
    }

    function register() {
        return view('front.account.register');
    }

    function postRegister(Request $request) {
        if ($request->password != $request->password_confirmation) {
            return back()->with('notification','ERROR: Confirm password does not match');
        }
        $name = $request->firstname . ' ' . $request->lastname;
        $data = [
            'name' => $name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => 2, // Đăng ký tài khoản cấp: khách hàng bình thường
        ];

        User::create($data);

        return redirect('account/login')
            ->with('notification','Register Success! Please login.');
    }
}
