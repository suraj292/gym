<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\OnlineInvoice;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $onlineLastOrder = OnlineInvoice::latest()->first();
        $onlineOrder = $onlineLastOrder ? $onlineLastOrder->order_number : 0;
        $onlineInvoice = OnlineInvoice::create([
            'invoice_number' => $onlineOrder + 1,
            'order_number' => $onlineOrder + 1,
            'user_id' => Auth::id(),
            'address_id' => $request->address_id,
            'order_id' => $order->id,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Order created successfully',
            'order' => $order,
            'number' => encrypt($onlineInvoice->order_number)
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

    public function successPage(Request $request)
    {
        $onlineInvoice = OnlineInvoice::find(decrypt($request->number));
        $order = Order::find($onlineInvoice->order_id);
        $address = Address::find($onlineInvoice->address_id);

        return view('Pages.Public.success.index', [
            'order' => $order,
            'address' => $address,
            'invoice' => $onlineInvoice,
        ]);
    }

    public function orderConfirmation()
    {

    }
}
