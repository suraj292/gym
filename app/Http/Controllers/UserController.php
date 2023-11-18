<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Throwable;

class UserController extends Controller
{
    public function index()
    {
        // Login get page
        if (Auth::check()){
            return redirect(route('public.home'));
        }
        return view('Pages.Public.Account.index');
    }

    public function submitLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            session()->put('user', encrypt(Auth::id()));
            return redirect(route('public.home'));
        }
        session()->flash('error_message', 'Invalid credentials');
        return redirect(route('public.login'));
    }

    public function register()
    {
        return view('Pages.Public.Account.register');
    }

    public function submitRegistration(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|email|unique:users',
                'phone' => 'required|integer|digits:10|unique:users',
                'password' => 'required|min:8',
                'confirm_password' => 'required|same:password',
            ]);
            // Create a new user instance
            $user = User::create([
                'name' => $request->input('name'),
                'email' => strtolower($request->input('email')),
                'phone' => $request->input('phone'),
                'password' => Hash::make($request->input('password')),
            ]);
            // Optionally, you can log the user in after registration
            auth()->login($user);
            return redirect(route('public.home'))->with('success_message', 'Registration successful!');
        }catch (Throwable $e){
//            return redirect()->back()->withErrors(['registration' => 'Registration failed!']);
            dd($e);
        }
    }
    public function logout()
    {
        Auth::logout();
        session()->forget('user');
        return redirect(route('public.login'));
    }
}
