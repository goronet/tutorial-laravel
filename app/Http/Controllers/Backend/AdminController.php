<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function home()
    {
        return view('admin.index');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function loguear(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        if (auth()->attempt(['email' => $email, 'password' => $password])) {
            return redirect()->action([AdminController::class, 'home']);
        } else {
            return redirect()->action([AdminController::class, 'login']);
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->action([AdminController::class, 'login']);
    }
}
