<?php

namespace App\Http\Controllers;

use App\Models\ProgramList;
use Illuminate\Http\Request;

class ProgramListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('department.programs');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProgramList  $programList
     * @return \Illuminate\Http\Response
     */
    public function show(ProgramList $programList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProgramList  $programList
     * @return \Illuminate\Http\Response
     */
    public function edit(ProgramList $programList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProgramList  $programList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProgramList $programList)
    {
        $programList->fill($request->all())->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProgramList  $programList
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProgramList $programList)
    {
        $programList->delete();
        return back();
    }
}
