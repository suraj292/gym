<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        if (!auth()->check()) {
            return redirect()->route('public.login');
        }
        $address = auth()->user()->address()->defaultAddress()->first();

        return view('Pages.Public.Cart.index', compact('address'));
    }
}
