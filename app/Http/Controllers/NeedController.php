<?php

namespace App\Http\Controllers;

use App\Models\Need;
use Illuminate\Http\Request;

class NeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $billiards = Need::where('answer','=',21)->count();
        $computerGames = Need::where('answer','=',22)->count();
        $drinking = Need::where('answer','=',23)->count();
        $drugs = Need::where('answer','=',24)->count();
        $gambling = Need::where('answer','=',25)->count();
        $smoking = Need::where('answer','=',26)->count();
        $misunderstandingWithMother = Need::where('answer','=',32)->count();
        $misunderstandingWithFather = Need::where('answer','=',33)->count();
        $separatedParents = Need::where('answer','=',34)->count();
        $tos = Need::where('answer','=',55)->count();
        //dd($separatedParents);
        return view('graph.show', compact('billiards','computerGames','drinking','drugs','gambling','smoking','misunderstandingWithMother','misunderstandingWithFather','separatedParents','tos'));
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
        foreach ($request->needs as $need){
            Need::create([
                'user_id' => auth()->user()->id,
                'answer' => $need
            ]);
        }
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Need  $need
     * @return \Illuminate\Http\Response
     */
    public function show(Need $need)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Need  $need
     * @return \Illuminate\Http\Response
     */
    public function edit(Need $need)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Need  $need
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Need $need)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Need  $need
     * @return \Illuminate\Http\Response
     */
    public function destroy(Need $need)
    {
        //
    }
}
