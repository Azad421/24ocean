<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addCart(Request $request){
        $product = Product::find($request->id);
        $data['quantity'] = $request->quantity;
        $data['id'] = $product->id;
        $data['name'] = $product->name;
        $data['price'] = $product->price;
        $data['attribute'] = ['image'=> $product->image];
        Cart::add($data);
        return redirect()->back();
    }
}
