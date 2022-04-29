<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }

    public function index()
    {
        $pageTitle = "Orders";
        $breadCrumb = [
            array('title' => 'Home',
                'route' => 'admin.dashboard')
        ];
        $orders = Order::all();
        $title = "Admin - Orders";
        return view('admin.orders', compact('orders', 'title', 'pageTitle', 'breadCrumb'));
    }

    public function details($id){
        $order = Order::where('id', $id)->first();
        $pageTitle = "Order - ".$order->oId;
        $breadCrumb = [
            array('title' => 'Home',
                'route' => 'admin.dashboard')
        ];
        $title = $pageTitle;
        return view('admin.order', compact('order', 'title', 'pageTitle', 'breadCrumb'));

    }
}
