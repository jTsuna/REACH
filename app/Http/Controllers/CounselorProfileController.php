<?php

namespace App\Http\Controllers;

use App\Models\CounselorProfile;
use Illuminate\Http\Request;

class CounselorProfileController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CounselorProfile::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CounselorProfile  $counselorProfile
     * @return \Illuminate\Http\Response
     */
    public function show(CounselorProfile $counselorProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CounselorProfile  $counselorProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(CounselorProfile $counselorProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CounselorProfile  $counselorProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CounselorProfile $counselorProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CounselorProfile  $counselorProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(CounselorProfile $counselorProfile)
    {
        //
    }
}
