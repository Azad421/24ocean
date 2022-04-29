<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryStatus;
use App\Models\Product;
use Illuminate\Http\Request;
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

    public function product(){

        $categories = Category::where('status', CategoryStatus::where('nickname', 'active')->first()['id'])->get();
        $title = config('app.name', '24 Ocean').' - Products';
        return view('skintype', compact('title', 'categories'));
    }

    public function blog(){
        $title = config('app.name', '24 Ocean').' - Blogs';
        return view('blogs', compact('title'));
    }

    public function contact(Request $request){
        MailController::ContactMail($request->name, $request->email, $request->message);
        return redirect()->route('sent');
    }

    public function sent(){
        return view('thank-you');
    }
}
