<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\ProductStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle = "Products";
        $breadCrumb = [
            array('title' => 'Home',
                'route' => 'admin.dashboard')
        ];
        $products = Product::all();
        $title = "Admin - Product";
        return view('admin.products', compact('products', 'title', 'pageTitle', 'breadCrumb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $pageTitle = "Create New Product";

        $breadCrumb = [
            array('title' => 'Home',
                'route' => 'admin.dashboard'),
            array('title' => 'Product',
                'route' => 'admin.product.index'),
        ];
        $statuses = ProductStatus::all();
        $categories = Category::all();
        $title = "Admin - Create New Product";
        return view('admin.create-product', compact('categories', 'statuses', 'title', 'pageTitle', 'breadCrumb'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $image = '';
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $image = time() . '-product.' . $request->image->extension();
                $request->image->move(public_path('images'), $image);
            }
        }
        $product = new Product();

        $product->name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->image = $image;
        $product->status = $request->status;
        $product->price = $request->price;
        $product->category = $request->category;
        $product->description = $request->description;

        $product->save();

        return redirect()->route('admin.product.index')->with('alert-success', 'Product Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }
    public function updateStatus($id)
    {
        $product = Product::where('id', $id)->first();
        $category = new ProductStatus();
        if($category->where('id',$product->status)->first()['nickname'] == 'active'){
            $category_status = $category->where('nickname','inactive')->first()['id'];
        }else{
            $category_status = $category->where('nickname','active')->first()['id'];
        }
        Product::where('id', $id)->update(['status' => $category_status]);
        return redirect()->back()->with('alert-success', 'Status updated successfully');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function edit(Product $product)
    {

        $pageTitle = $product->name;
        $breadCrumb = [
            array('title' => 'Home',
                'route' => 'admin.dashboard'),
            array('title' => 'Product',
                'route' => 'admin.product.index'),
        ];
        $statuses = ProductStatus::all();
        $categories = Category::all();
        $title = $product->name;
        return view('admin.edit-product', compact('product','categories', 'statuses', 'title', 'pageTitle', 'breadCrumb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $image = $product->image;
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                if(File::exists(public_path('images/'.$image))){
                    File::delete(public_path('images/'.$image));
                }
                $image = time() . '-product.' . $request->image->extension();
                $request->image->move(public_path('images'), $image);
            }
        }

        $product->name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->image = $image;
        $product->status = $request->status;
        $product->price = $request->price;
        $product->category = $request->category;
        $product->description = $request->description;

        $product->save();

        return redirect()->route('admin.product.index')->with('alert-success', 'Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $image = $product->image;
        if(File::exists(public_path('images/'.$image))){
            File::delete(public_path('images/'.$image));
        }
        $product->delete();
        return redirect()->back()->with('alert-danger', 'Product Deleted!');
    }

    public function favorites(Request $request){
        $product = Product::where('id', $request->product_id)->first();
        if($product->favorites == 1){
            $favorites = 0;
            $message = "Product removed from favorites";
        }else{
            $favorites = 1;
            $message = "Product Added to favorites";
        }
        $product->favorites = $favorites;
        $product->save();

        return redirect()->back()->with('alert-success', $message);
    }

    public function arrival(Request $request){
        $product = Product::where('id', $request->product_id)->first();
        if($product->arrival == 1){
            $arrival = 0;
            $message = "Product removed from Arrival";
        }else{
            $arrival = 1;
            $message = "Product Added to Arrival";
        }
        $product->arrival = $arrival;
        $product->save();

        return redirect()->back()->with('alert-success', $message);
    }
}
