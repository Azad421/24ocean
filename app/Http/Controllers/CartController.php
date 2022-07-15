<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addCart(Request $request)
    {
        $product = Product::find($request->id);
        $data['quantity'] = $request->quantity;
        $data['id'] = $product->id;
        $data['name'] = $product->name;
        $data['price'] = $product->price;
        $data['attributes']['image'] = $product->image;
        $data['attributes']['stock'] = $product->stock;
        Cart::add($data);

        if (Cart::getSubTotal() >= 699) {
            $this->setShippingPrice();
        }

        return redirect()->back();
    }

    public function removeCart($id = null)
    {
        if ($id == null) {
            Cart::clear();
        } else {
            Cart::remove($id);
        }
        if (Cart::getContent()->count() === 0) {
            Cart::clearCartConditions();
        }
        if (Cart::getSubTotal() < 699) {
            Cart::removeCartCondition('shipping charge');
        }
        return redirect()->back();
    }

    public function updateCart($id = null)
    {
        $quantity = Cart::get($id)['quantity'];
        if ($quantity > 1) {
            Cart::update($id, array(
                'quantity' => -1
            ));
        }
        if (Cart::getSubTotal() < 699) {
            Cart::removeCartCondition('shipping charge');
        }
        return redirect()->back();
    }

    public function updateCartQuantity($id = null)
    {
        $product = Product::find($id);
        $quantity = Cart::get($id)['quantity'];
        if ($product->stock > $quantity) {
            Cart::update($id, array(
                'quantity' => +1
            ));
        }
        if (Cart::getSubTotal() >= 699) {
            $this->setShippingPrice();
        }
        return redirect()->back();
    }

    public function setShippingPrice(){
        // add condition to only apply on totals, not in subtotal
        $condition = new \Darryldecode\Cart\CartCondition(array(
            'name' => 'shipping charge',
            'type' => 'shipping',
            'target' => 'total', // this condition will be applied to cart's total when getTotal() is called.
            'value' => '+50.50',
            'order' => 2 // the order of calculation of cart base conditions. The bigger the later to be applied.
        ));
        Cart::condition($condition);
    }
}
