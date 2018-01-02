<?php

namespace App\Http\Controllers;

use App\AModell;
use App\Baujahr;
use App\Bilder;
use App\Kraftstoff;
use App\Vermieten;
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
        $Vermieten = Vermieten::all();
        return view('allgemeineSuche',['aMarken' => $aMarken, 'aModelle' => $aModelle, 'Kraftstoffe' => $Kraftstoffe,
            'Baujahre' => $Baujahre, 'Vermieten' => $Vermieten]);
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

    public function findAutoModelle(Request $request){

        $data= AModell::where('idAmarke', $request->id)->get();
        return response()->json($data);

    }
}
