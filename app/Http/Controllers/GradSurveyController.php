<?php

namespace App\Http\Controllers;

use App\Models\GradSurvey;
use App\Imports\GradSurveyImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class GradSurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('graph.gradsurvey');
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
        $survey = GradSurvey::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GradSurvey  $gradSurvey
     * @return \Illuminate\Http\Response
     */
    public function show(GradSurvey $gradSurvey)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GradSurvey  $gradSurvey
     * @return \Illuminate\Http\Response
     */
    public function edit(GradSurvey $gradSurvey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GradSurvey  $gradSurvey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GradSurvey $gradSurvey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GradSurvey  $gradSurvey
     * @return \Illuminate\Http\Response
     */
    public function destroy(GradSurvey $gradSurvey)
    {
        //
    }

    public function gradSurveyUpload(Request $request){
        Excel::import(new GradSurveyImport(), $request->file('file'));
        return back();
    }
}
