<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\Payments;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;


class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }

    public function index($order_id = null)
    {
        $order = Order::find($order_id);
        return view('payment', compact('order'));
    }

    public function withRazorPay($order_id = null)
    {
        $order = Order::find($order_id);

        $payment = new Payments();
        $payment->order_id = $order->id;
        $payment->amount = $order->price_amount;
        $payment->status = false;
        $payment->save();
        $api = new Api(config('app.razor_pay_key_id'), config('app.razor_pay_key_secret'));

        $orderData = [
            'receipt' => 123,
            'amount' => $order->price_amount * 100,
            'currency' => 'INR',
        ];

        $razorpayOrder = $api->order->create($orderData);

        $razorpayOrderId = $razorpayOrder['id'];

        session(['razorpay_order_id' => $razorpayOrderId]);

        $address = $order->address->where('type', '=', 'both', 'or', 'shipping')->first();
        return view('razorPay-payment', compact('razorpayOrder', 'orderData', 'address', 'order'));
    }

    public function verify(Request $request)
    {
        $success = true;

        $error = "Payment Failed";


        $api = new Api(config('app.razor_pay_key_id'), config('app.razor_pay_key_secret'));

        try {
            // Please note that the razorpay order ID must
            // come from a trusted source (session here, but
            // could be database or something else)
            $attributes = array(
                'razorpay_order_id' => session('razorpay_order_id'),
                'razorpay_payment_id' => $request->razorpay_payment_id,
                'razorpay_signature' => $request->razorpay_signature
            );

            $api->utility->verifyPaymentSignature($attributes);
        } catch (SignatureVerificationError $e) {
            $success = false;
            $error = 'Razorpay Error : ' . $e->getMessage();
        }


        if ($success === true) {
            $payment = Payments::where('razorpay_order_id', session('razorpay_order_id'))->first();
            $payment->payment_id = $request->razorpay_payment_id;
            $payment->status = 'success';
            $payment->save();
            $order_id = $payment->order->id;
            $order = Order::find('id', $order_id);
            $order->status_id = OrderStatus::find('nickname', 'processing')->first()['id'];
            $order->save();
        }
        return view('verify', compact('success'));
    }
}
