<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
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

    public function loguear(LoginRequest $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        if (auth()->attempt(['email' => $email, 'password' => $password])) {
            return redirect()->action([AdminController::class, 'home']);
        } else {
            return redirect()
                ->action([AdminController::class, 'login'])
                ->withErrors([
                    'email' => 'Credenciales incorrectas'
                ]);
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->action([AdminController::class, 'login']);
    }
}
