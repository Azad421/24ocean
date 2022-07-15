<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\State;
use App\Http\Requests\StoreStateRequest;
use App\Http\Requests\UpdateStateRequest;

class StateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle = "States";
        $breadCrumb = [
            array('title' => 'Home',
                'route' => 'admin.dashboard')
        ];
        $states = State::all();
        $title = "Admin - State";
        return view('admin.state', compact('states', 'title', 'pageTitle', 'breadCrumb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageTitle = "Add State";

        $breadCrumb = [
            array('title' => 'Home',
                'route' => 'admin.dashboard'),
            array('title' => 'States',
                'route' => 'admin.state.index'),
        ];
        $title = "Admin - Add State";
        $countries = Country::all();
        return view('admin.add-state', compact('countries','title', 'pageTitle', 'breadCrumb'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStateRequest  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(StoreStateRequest $request)
    {
        $state = new State();
        $state->name = $request->name;
        $state->country_id = $request->country_id;
        $state->zip_code = $request->zip_code;
        $state->save();

        return redirect()->route('admin.state.index')->with('alert-success', 'State Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function show(State $state)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function edit(State $state)
    {
        $pageTitle = "Edit State";

        $breadCrumb = [
            array('title' => 'Home',
                'route' => 'admin.dashboard'),
            array('title' => 'States',
                'route' => 'admin.state.index'),
        ];
        $title = $state->name;
        $countries = Country::all();
        return view('admin.edit-state', compact('state', 'countries','title', 'pageTitle', 'breadCrumb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStateRequest  $request
     * @param  \App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStateRequest $request, State $state)
    {
        $state->name = $request->name;
        $state->country_id = $request->country_id;
        $state->zip_code = $request->zip_code;
        $state->save();

        return redirect()->route('admin.state.index')->with('alert-success', 'State Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function destroy(State $state)
    {
        $state->delete();
        return redirect()->route('admin.state.index')->with('alert-danger', 'State Deleted Successfully!');
    }
}
