<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();

//        dd($user);
        return view('Pages.Public.Account.Profile.index', ['user' => $user]);
    }
}
