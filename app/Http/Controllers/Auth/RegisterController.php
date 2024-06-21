<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function ShowRegisterForm()
    {
        return view('auth.register');
    }

    public function register(AuthRequest $request)
    {
        $data = request()->validate([
            'fullname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $data['password'] = bcrypt($data['password']);
//        dd($data);
        $user = User::query()->create($data);
        Auth::login($user);
        $request->session()->regenerate();
        return redirect('auth/login');
    }
}

