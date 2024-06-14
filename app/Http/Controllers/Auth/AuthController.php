<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
    }
    public function index()
    {
        if (Auth::id() > 0) {
            return redirect()->route('dashboard');
        }
        return view('auth.login');
    }
    public function login(AuthRequest $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        // dd($credentials);
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard')->with('success', 'Đăng nhập thành công');
        }
        return redirect()->route('auth.login')->with('error', 'Tài khoản hoặc mật khẩu không đúng');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('auth.login')->with('error', 'Đăng xuất thành công');
    }
}
