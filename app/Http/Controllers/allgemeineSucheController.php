<?php

namespace App\Http\Controllers;

use App\AModell;
use App\Baujahr;
use App\Kraftstoff;
use Illuminate\Http\Request;
use App\AMarke;

class allgemeineSucheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aMarken = AMarke::all();
        $aModelle = AModell::all();
        $Kraftstoffe = Kraftstoff::all();
        $Baujahre = Baujahr::all();
        return view('allgemeineSuche.index',['aMarken' => $aMarken, 'aModelle' => $aModelle, 'Kraftstoffe' => $Kraftstoffe, 'Baujahre' => $Baujahre]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $autoModelle = AModell::where('idAmarke',$id)->get();
        return view('allgemeineSuche.show',['autoModelle' => $autoModelle]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
