<?php

namespace App\Http\Controllers;

use App\Models\MissionVission;
use Illuminate\Http\Request;

class MissionVissionController extends Controller
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
        return view('dashboard.mission-vission');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new MissionVission();
        $data->mission = $request->input('mission');
        $data->vission = $request->input('vission');
        $data->save();

        return redirect()->back()->with('success', 'Data Saved Successfully ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MissionVission  $missionVission
     * @return \Illuminate\Http\Response
     */
    public function show(MissionVission $missionVission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MissionVission  $missionVission
     * @return \Illuminate\Http\Response
     */
    public function edit(MissionVission $missionVission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MissionVission  $missionVission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MissionVission $missionVission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MissionVission  $missionVission
     * @return \Illuminate\Http\Response
     */
    public function destroy(MissionVission $missionVission)
    {
        //
    }
}
