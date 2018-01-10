<?php

namespace App\Http\Controllers;

use App\AModell;
use App\autovermietung;
use App\Baujahr;
use App\Bilder;
use App\fahrradvermietung;
use App\FMarke;
use App\FModell;
use App\Kraftstoff;
use App\Ort;
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
        $fMarken = FMarke::all();
        $fModelle = FModell::all();
        $Kraftstoffe = Kraftstoff::all();
        $Baujahre = Baujahr::all();
        $aVermietung = autovermietung::all();
        $fVermietung = fahrradvermietung::all();
        return view('allgemeineSuche',['aMarken' => $aMarken, 'aModelle' => $aModelle, 'fMarken' => $fMarken,
            'fModelle' => $fModelle, 'Kraftstoffe' => $Kraftstoffe, 'Baujahre' => $Baujahre, 'aVermietung' => $aVermietung,
            'fVermietung' => $fVermietung]);
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

    public function search(Request $request){

        if($request->ajax()){
            $output="";
            $cities=Ort::where('Name','LIKE',$request->search.'%')
                        ->orWhere('plz','Like',$request->search.'%')->get();


            if($cities){

                foreach($cities as $key => $city)
                $output.= '<li id="test">'.$city->Name.', '.$city->plz.'</li>';
            }
            return Response($output);
        }
    }

    public function searchVehicles(Request $request){

        $output="";
        $aVermietung = autovermietung::where([
            ['autoort','LIKE',$request->ort],
            ['autopostleitzahl','LIKE',$request->plz],
             ['autostartdate','<=',$request->startdate],
             ['autoenddate','>=',$request->enddate]
        ])->get();

        foreach($aVermietung as $key => $aVer)
            $output.=
                '<a href="#">
                    <div class="searchResults_result">
                        <div class="searchResults_image">
                        <img src="img/searchPictures/'.$aVer->autobild.'" alt="'.$aVer->automodell.'">
                        </div>
                        <div class="searchResults_info">
                            <div class="searchResults_info-inner">
                                <h3 class="searchResults_title">'
                                    .$aVer->automodell.
                                '</h3>
                                 <div>
                                    <p>'.$aVer->autostrasseNr.','.$aVer->autoort.'</p>
                                </div>
                            </div>
                            <div class="searchResults_priceContainer">
                                <h3 class="searchResults_price">
                                    €'.$aVer->autopreis.
                                '</h3>
                                <span>pro Tag</span>
                            </div>
                        </div>
                    </div>
                </a>';


      /*  $fVermietung = fahrradvermietung::where([
            ['ort','LIKE',$request->ort.'%'],
            ['postleitzahl','=',$request->plz],
            ['startdate','<=',$request->startdate],
            ['enddate','>=',$request->enddate]
        ])->get();*/

        return response($output);

    }
}
