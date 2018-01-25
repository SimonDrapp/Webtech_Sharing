<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\autovermietung;
use App\fahrradvermietung;


class AnsichtAutoController extends Controller
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
     /*   $start = $request->startdate;
        $ende =  $request->input('enddate');

        return view('Bezahlen',['start' => $start]);*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name, $id)
    {

        if ($name === "Auto"){
            $vermietungen = autovermietung::findOrFail($id);
            return view('AnsichtAuto', ['vermietungen' => $vermietungen]);
        }
        else if (($name === "Fahrrad")) {
            $vermietungen = fahrradvermietung::findOrFail($id);
            return view('AnsichtFahrrad', ['vermietungen' => $vermietungen]);
        } else{
           return response( "Something is wrong");
        }
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

    public function putDate(Request $request){
        $dates = new autovermietung;
        $dates ->startdate = $request->startdate;
        $dates->enddate = $request->enddate;

        $request->session()->put('startdate', $request->startdate);
        $request->session()->put('enddate', $request->enddate);

        return view('Bezahlen',['dates'=> $dates]);
    }
}
