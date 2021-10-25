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
        $year11 = GradSurvey::where('yearGrad','=', 2011)->count();
        $year12 = GradSurvey::where('yearGrad','=', 2012)->count();
        $year13 = GradSurvey::where('yearGrad','=', 2013)->count();
        $year14 = GradSurvey::where('yearGrad','=', 2014)->count();
        $year15 = GradSurvey::where('yearGrad','=', 2015)->count();
        $year16 = GradSurvey::where('yearGrad','=', 2016)->count();
        $year17 = GradSurvey::where('yearGrad','=', 2017)->count();
        $year18 = GradSurvey::where('yearGrad','=', 2018)->count();
        $year19 = GradSurvey::where('yearGrad','=', 2019)->count();
        $year20 = GradSurvey::where('yearGrad','=', 2020)->count();
        $male = GradSurvey::where('gender','=', 'Male')->count();
        $female = GradSurvey::where('gender','=', 'Female')->count();
        $yes = GradSurvey::where('inlineJob','=', 'Yes')->count();
        $no = GradSurvey::where('inlineJob','=', 'No')->count();
        $fewmonths = GradSurvey::where('howLongAfterGrad','=', '1 - 6 months after graduation')->count();
        $severalmonths = GradSurvey::where('howLongAfterGrad','=', '7 - 12 months after graduation')->count();
        $fewyears = GradSurvey::where('howLongAfterGrad','=', 'More than a year but less than two years after graduation')->count();
        $severalyears = GradSurvey::where('howLongAfterGrad','=', 'More than two years after graduation')->count();
        $a = GradSurvey::where('afterGrad','=', 'a. worked immediately')->count();
        $b = GradSurvey::where('afterGrad','=', 'b. studied')->count();
        $c = GradSurvey::where('afterGrad','=', 'c. set up own business')->count();

        return view('graph.gradsurveychart', 
        compact('year11', 'year12', 'year13', 'year14', 'year15', 'year16', 'year17', 'year18', 'year19', 'year20', 'male', 'female', 
        'yes', 'no', 'fewmonths', 'severalmonths', 'fewyears', 'severalyears', 'a', 'b', 'c'));
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
