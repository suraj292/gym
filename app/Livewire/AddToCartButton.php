<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class AddToCartButton extends Component
{
    public $product;

    public function render()
    {
        return view('livewire.add-to-cart-button');
    }

//    public function addToCart($product) // wire:click="addToCart({{ $product }})"
//    {
//        localStorage.setItem('cart', JSON.stringify(product));
//
////        $data = Cookie::make('cart', json_encode($product), 60 * 60 * 60);
//        dd($cookie);
//
//        if (Cookie::get('cart')){
//            $cart = json_decode(Cookie::get('cart'), true);
//            $cart[$product['id']] = [
//                'id' => $product['id'],
//                'name' => $product['name'],
//                'price' => $product['price'],
//                'quantity' => 1,
//                'image' => $product['images'][0]
//            ];
//            Cookie::queue('cart', json_encode($cart));
//            dd(Cookie::get('cart'));
//        }else{
//            $data = Cookie::make('cart', json_encode($product), 60 * 60 * 60);
//            dd($data);
//        }
//    }
}
