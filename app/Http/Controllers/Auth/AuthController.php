<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    //
    public function loginform(): View
    {
        return view('auth.login');
    }

    public function registerform(): View
    {
        return view('auth.register');
    }

    public function dashboard(): view
    {
        return view('client.dashboard');
    }
}
