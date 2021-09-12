<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (User::where('email', $email)->first()) {
            if (Auth::attempt(['email' => $email, 'password' => $password])) {
                return redirect(url('admin/dashboard'));
            } else {
                return redirect()->back()->with('error', 'Your password is wrong!');
            }
        } else {
            return redirect()->back()->with('error', 'Email doesn\'t exists!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('parallelWorld/login')->with('success', 'Logout Successfully');
    }
}