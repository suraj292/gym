<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Order;
use Illuminate\Http\Request;

class checkoutController extends Controller
{
    public function index()
    {
        if (!auth()->check()) {
            return redirect()->route('public.login');
        }
        $address = auth()->user()->address()->defaultAddress()->first();
        return view('Pages.Public.checkout.index', [
            'address' => $address,
        ]);
    }

    public function checkoutAjax(Request $request)
    {
        $lastOrder = Order::latest()->first();
        $orderNumber = $lastOrder ? $lastOrder->order_number : 0;

        $order = Order::create([
            'user_id' => $request->user_id,
            'address_id' => $request->address_id,
            'order_number' => $orderNumber + 1,
            'cart' => $request->cart,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Order created successfully',
            'order' => $order,
        ]);
    }

    public function orders(Request $request)
    {
        $orders = auth()->user()->order()->latest()->first();
        $address = Address::find($orders->address_id);

        return view('Pages.Public.Orders.index', [
            'orders' => $orders,
            'address' => $address,
        ]);
    }
}
