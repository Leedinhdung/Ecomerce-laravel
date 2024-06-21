<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;


use App\Http\Requests\AuthRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::id() > 0) {
            return redirect()->route('dashboard');
        }

        return view('auth.login');
    }

    public function login(AuthRequest $request)
    {
//        dd(request()->all());
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        // dd($credentials);
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard')->with('success', 'Đăng nhập thành công');
        }
        return redirect()->route('login')->with('error', 'Tài khoản hoặc mật khẩu không đúng');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Đăng xuất thành công');
    }
}
