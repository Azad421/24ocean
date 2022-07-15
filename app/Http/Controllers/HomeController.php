<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryStatus;
use App\Models\Country;
use App\Models\Product;
use App\Models\State;
use Illuminate\Http\Request;
use Cart;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all();
        $title = config('app.name', '24 Ocean');
        return view('index', compact('title', 'products'));
    }

    public function product()
    {

        $categories = Category::where('status', CategoryStatus::where('nickname', 'active')->first()['id'])->get();
        $title = config('app.name', '24 Ocean') . ' - Products';
        return view('skintype', compact('title', 'categories'));
    }

    public function blog()
    {
        $title = config('app.name', '24 Ocean') . ' - Blogs';
        return view('blogs', compact('title'));
    }

    public function contact(Request $request)
    {
        MailController::ContactMail($request->name, $request->email, $request->message);
        return redirect()->route('sent');
    }

    public function sent()
    {
        $title = 'Mail Sent';
        return view('thank-you', compact('title'));
    }

    public function cart()
    {
        $title = 'Cart List';
        return view('cart', compact('title'));
    }

    public function checkout()
    {
        $countries = Country::all();
        $states = State::all();
        $title = 'Check Out';
        return view('checkout', compact('title', 'states', 'countries'));
    }

    public function state(Request $request)
    {
        if (!empty($request->country)) {
            $states = State::all()->where('country_id', Country::where('name', $request->country)->first()['id']);
            return response()->json($states);
        }
        return response()->json();
    }
    public function zipCode(Request $request)
    {
        if (!empty($request->state)) {
            $state = State::where('name', $request->state)->first();
            return response()->json($state);
        }
        return response()->json();
    }

    public function aboutUs(){
        $title = config('app.name', '24 Ocean') . ' - About Us';
        return view('about', compact('title'));
    }
    public function refund(){
        $title = config('app.name', '24 Ocean') . ' - Refund Policy';
        return view('refund', compact('title'));
    }
    public function returnPolicy(){
        $title = config('app.name', '24 Ocean') . ' - Return Policy';
        return view('returnpolicy', compact('title'));
    }
    public function shipping(){
        $title = config('app.name', '24 Ocean') . ' - Shipping Policy';
        return view('shipping', compact('title'));
    }
    public function termsCondition(){
        $title = config('app.name', '24 Ocean') . ' - About Us';
        return view('about', compact('title'));
    }
    public function disclaimer(){
        $title = config('app.name', '24 Ocean') . ' - Disclaimer';
        return view('disclaimer', compact('title'));
    }
    public function privacyPolicy(){
        $title = config('app.name', '24 Ocean') . ' - Privacy Policy';
        return view('privacy', compact('title'));
    }
}
