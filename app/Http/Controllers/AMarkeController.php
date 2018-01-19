<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AMarke;
use App\AModell;
use DB;


class AMarkeController extends Controller
{                                                                       //NOCHT NICHT FERTIG -- KOMMT NOCH! GRÜßLE :-)
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $amarke =amarke::all();
        /*  $amodell = DB::SELECT('Select AModell.aModellname FROM AModell, AMarke WHERE AModell.idAmarke = AMarke.id');  */
        return view('posts.index', ['amarke' => $amarke]);
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
        $amodell =AModell::where('idAmarke', $id)->get();
        return view('posts.show', ['amodell' => $amodell]);
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
