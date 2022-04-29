<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryStatus;
use App\Models\SubCategory;
use App\Http\Requests\StoreSubCategoryRequest;
use App\Http\Requests\UpdateSubCategoryRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
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
        $pageTitle = "Sub Categories";
        $breadCrumb = [
            array('title' => 'Home',
                'route' => 'admin.dashboard')
        ];
        $subcategories = SubCategory::all();
        $title = "Admin - Category";
        return view('admin.subcategory', compact('subcategories', 'title', 'pageTitle', 'breadCrumb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $pageTitle = "Add Sub Categories";

        $breadCrumb = [
            array('title' => 'Home',
                'route' => 'admin.dashboard'),
            array('title' => 'Sub Categories',
                'route' => 'admin.subcategory.index'),
        ];
        $statuses = CategoryStatus::all();
        $categories = Category::all();
        $title = "Admin - Add Sub Category";
        return view('admin.create-sub-category', compact('statuses', 'title', 'pageTitle', 'breadCrumb', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSubCategoryRequest  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(StoreSubCategoryRequest $request)
    {
        $image = '';
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $image = time() . '-category.' . $request->image->extension();
                $request->image->move(public_path('images'), $image);
            }
        }
        $category_name = $request->category_name;
        $category_status = $request->category_status;
        $description = $request->description;
        $slug = Str::slug($category_name, '-');
        $category = SubCategory::create([
            'name' => $category_name,
            'slug' => $slug,
            'category_id' => $request->category,
            'status' => $category_status,
            'image' => $image,
            'description' => $description,
        ]);

        return redirect()->route('admin.subcategory.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param SubCategory $sub_category
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function edit($sub_category)
    {
        $pageTitle = "Edit Category";
        $breadCrumb = [
            array('title' => 'Home',
                'route' => 'admin.dashboard'),
            array('title' => 'Categories',
                'route' => 'admin.category.index'),
        ];
        $subCategory = SubCategory::where('id', $sub_category)->first();
        $title = $subCategory->name;
        $statuses = CategoryStatus::all();
        $categories = Category::all();
        if($subCategory == null){
            return redirect()->route('admin.subcategory.index');
        }
        return view('admin.edit_sub-category', compact('subCategory', 'categories', 'statuses', 'pageTitle', 'breadCrumb', 'title'));
    }


    public function updateStatus($id)
    {
        $category = SubCategory::where('id', $id)->first();
        if($category->status == '1'){
            $category_status = 2;
        }else{
            $category_status = 1;
        }
        $category->status = $category_status;
        $category->save();
        return redirect()->back()->with('alert-success', 'Status updated successfully');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubCategoryRequest  $request
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(UpdateSubCategoryRequest $request, $subCategory)
    {
        $subCategory = SubCategory::where('id', $subCategory)->first();
        $image = $request->oldImage ?? '';
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                if(File::exists(public_path('images/'.$image))){
                    File::delete(public_path('images/'.$image));
                }
                $image = time() . '-category.' . $request->image->extension();
                $request->image->move(public_path('images'), $image);
            }
        }
        $request->validated();
        $subCategory->name = $request->category_name;
        $subCategory->status = $request->category_status;
        $subCategory->description = $request->description;
        $subCategory->slug = Str::slug($request->category_name, '-');
        $subCategory->image = $image;
        $subCategory->save();

        return redirect()->route('admin.subcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy($subCategory)
    {
        $subCategory = SubCategory::find($subCategory);
        $image = $subCategory->image;
        if(File::exists(public_path('images/'.$image))){
            File::delete(public_path('images/'.$image));
        }
        $subCategory->delete();
        return redirect()->back()->with('alert-danger', 'Sub Category Deleted');
    }
}
