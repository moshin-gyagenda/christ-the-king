<?php

namespace App\Http\Controllers;

use App\Models\Facilities_Infrastructure;
use Illuminate\Http\Request;

class FacilitiesInfrastructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.facilities_infrastructure');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = new Facilities_Infrastructure();
        $data->tittle = $request->input('tittle');
        $data->image = $request->input('image');
        $data->description = $request->input('description');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            $imagePath = $file->move(public_path('uploads'), $filename);
            $data->image = $filename;
        }
        $data->save();

        return redirect()->back()->with('success', 'Data Saved Successfully ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facilities_Infrastructure  $facilities_Infrastructure
     * @return \Illuminate\Http\Response
     */
    public function show(Facilities_Infrastructure $facilities_Infrastructure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facilities_Infrastructure  $facilities_Infrastructure
     * @return \Illuminate\Http\Response
     */
    public function edit(Facilities_Infrastructure $facilities_Infrastructure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Facilities_Infrastructure  $facilities_Infrastructure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Facilities_Infrastructure $facilities_Infrastructure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facilities_Infrastructure  $facilities_Infrastructure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facilities_Infrastructure $facilities_Infrastructure)
    {
        //
    }
}
