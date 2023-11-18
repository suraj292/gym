<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminAuthController extends Controller
{
    public function show()
    {
        if (Session::has('admin')) {
            return redirect()->route('admin.dashboard');
        }
        return view('Pages.Admin.login');
    }
    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            Session::put('admin', Auth::id());
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->back()->withErrors(['invalid' => 'Invalid Credentials']);
        }

    }
}
