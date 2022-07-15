<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrderRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Address;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\OrderStatus;
use App\Models\User;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class UserController extends Controller
{
        public function __construct()
        {
            $this->middleware('auth:user');
        }

    public function dashboard()
    {
        $title = Auth::user()->name;
        $user = Auth::user();
        return view('user.userprofile', compact('title', 'user'));
    }

    public function update(UpdateUserRequest $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->address_line_one = $request->address_line_one;
        $user->address_line_two = $request->address_line_two;
        $user->save();
        return redirect()->back()->with('alert-success', "Your Details Saved Successfully!");
    }

    public function updatePImage(Request $request, $id)
    {
        $user = User::find($id);
        if ($request->hasFile('profile_pic')) {
            if ($request->file('profile_pic')->isValid()) {
                if ($user->profile_pic !== 'profile.png') {
                    if (File::exists(public_path('images/' . $user->profile_pic))) {
                        File::delete(public_path('images/' . $user->profile_pic));
                    }
                }
                $profile_pic = time() . '-user.' . $request->profile_pic->extension();
                $request->profile_pic->move(public_path('images'), $profile_pic);
            }
        } else {
            $profile_pic = $user->profile_pic;
        }
        $user->profile_pic = $profile_pic;
        $user->save();
        return redirect()->back()->with('alert-success', "Profile picture Saved Successfully!");
    }

    public function orders()
    {
        $userid = Auth::user()->id;
        $orders = Order::where('user_id', $userid)->get();
        $title = "Your Orders";
        return view('user.orders', compact('title', 'orders'));
    }

    public function order($id)
    {
        $order = Order::where('oId', $id)->get()->first();
        $title = $order->oId;
        return view('user.order-summery', compact('title', 'order'));
    }
    public function orderCancel($id)
    {
        $order = Order::where('id', $id)->get()->first();
        $order->status_id = OrderStatus::where('nickname', 'canceled')->first()['id'];
        $order->save();
        return redirect()->back()->with('alert-danger', "Order Canceled Successfully!");
    }


    public function createOrders(CreateOrderRequest $request)
    {
        $user_id = Auth::user()->id;
        $status = OrderStatus::where('nickname', 'pending')->first()['id'];
        $price = Cart::getTotal();
        $oId = strtoupper(Str::random(15));
        $order = new Order();
        $order->oId = $oId;
        $order->user_id = $user_id;
        $order->status_id = $status;
        $order->sipping_price =  Cart::getCondition('shipping charge')->getValue();
        $order->price_amount = Cart::getSubTotal();
        $order->total_amount = $price;
        $order->expected_delivery = Carbon::today()->addDays(7)->format('Y-m-d h:m:s');
        $order->save();
        $order_id = $order->id;


        foreach (Cart::getContent()->toArray() as $item) {
            $order_details = new OrderDetails();
            $order_details->order_id = $order_id;
            $order_details->product_id = $item['id'];
            $order_details->quantity = $item['quantity'];
            $order_details->price = Cart::get($item['id'])->getPriceSum();
            $order_details->save();
        }
        Cart::clear();


        $address = new Address();
        $address->order_id = $order_id;
        $address->fName = $request->fName;
        $address->lName = $request->lName;
        $address->contact_no = $request->contact_no;
        $address->type = "both";
        $address->country = $request->country;
        $address->state = $request->state;
        $address->zip_code = $request->zip_code;
        $address->address = $request->address;
        $address->save();
        return redirect()->route('payment', $order_id);
    }


}
