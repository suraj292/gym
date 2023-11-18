<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index()
    {
        $addresses = auth()->user()->address;

        return view('Pages.Public.Account.Address.index', compact('addresses'));
    }

    public function create()
    {
        return view('Pages.Public.Account.Address.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'mobile' => 'required|integer|digits:10',
            'landmark' => 'nullable|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'pincode' => 'required|integer|digits:6',
        ]);

        $add = Address::where('user_id', auth()->id())->first();
        $default = 0;

        if (!$add) $default = 1;

        $address = Address::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'mobile' => $request->mobile,
            'landmark' => $request->landmark,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'pincode' => $request->pincode,
            'is_default' => $default,
        ]);

        session()->flash('success_message', 'Address added successfully');
        return redirect(route('public.account.address'));
    }

    public function seDefault($id)
    {
        $add = Address::where('user_id', auth()->id())->first();
        if (!$add) {
            $check = Address::where('user_id', auth()->id())->get();
            foreach ($check as $item) {
                $item->is_default = 0;
                $item->save();
            }

            $address = Address::find(decrypt($id));
            $address->is_default = 1;
            $address->save();
        }
        return redirect(route('public.account.address'));
    }

    public function destroy($id)
    {
        $address = Address::find(decrypt($id));
        $address->delete();
        session()->flash('success_message', 'Address deleted successfully');
        return redirect(route('public.account.address'));
    }
}
