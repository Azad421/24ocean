<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;
use App\Models\Status;

class CountryController extends Controller
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
        $pageTitle = "Countries";
        $breadCrumb = [
            array('title' => 'Home',
                'route' => 'admin.dashboard')
        ];
        $countries = Country::all();
        $title = "Admin - Country";
        return view('admin.country', compact('countries', 'title', 'pageTitle', 'breadCrumb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {

        $pageTitle = "Add Country";

        $breadCrumb = [
            array('title' => 'Home',
                'route' => 'admin.dashboard'),
            array('title' => 'Countries',
                'route' => 'admin.country.index'),
        ];
        $title = "Admin - Add Country";
        return view('admin.add-country', compact('title', 'pageTitle', 'breadCrumb'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCountryRequest  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(StoreCountryRequest $request)
    {
        $country = new Country();
        $country->name=  $request->name;
        $country->save();
        return redirect()->route('admin.country.index')->with('alert-success', 'Country Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        $pageTitle = "Edit Country";
        $breadCrumb = [
            array('title' => 'Home',
                'route' => 'admin.dashboard'),
            array('title' => 'Countries',
                'route' => 'admin.country.index'),
        ];
        $title = $country->name;
        if($country == null){
            return redirect()->route('admin.country.index');
        }
        return view('admin.edit-country', compact('country',  'pageTitle', 'breadCrumb', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCountryRequest  $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(UpdateCountryRequest $request, Country $country)
    {
        $country->name = $request->name;
        $country->save();
        return redirect()->route('admin.country.index')->with('alert-success', 'Country Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        $country->delete();
        return redirect()->route('admin.country.index')->with('alert-danger', 'Country Deleted Successfully!');
    }
}
