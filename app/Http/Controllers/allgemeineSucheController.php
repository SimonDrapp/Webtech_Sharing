<?php

namespace App\Http\Controllers;

use App\AModell;
use App\Art;
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
use phpDocumentor\Reflection\Types\Null_;

class allgemeineSucheController extends Controller
{
    public function index(){

        $ortPlz = Null;
        $startdate = Null;
        $enddate = Null;

        $aMarken = amarke::all();
        $aModelle = amodell::all();
        $fMarken = fmarke::all();
        $fModelle = fmodell::all();

        $this->showResultsWithoutInput();

        $showCollection = session()->get('showCollection');

        //aktive Collection in "Ablage" für Filterfunktionen
        session()->put('activeCollection', $showCollection);

        return view('allgemeineSuche', ['aMarken' => $aMarken, 'aModelle' => $aModelle, 'fMarken' => $fMarken,
            'fModelle' => $fModelle,
            'ortPlz' => $ortPlz, 'startdate' => $startdate, 'enddate' => $enddate,
            'showCollection' => $showCollection]);
    }

    public function showResultsWithoutInput(){
        $aVermietung = autovermietung::all();
        $fVermietung = fahrradvermietung::all();

        $collection = $aVermietung->toBase()->merge($fVermietung);
        $showCollection = $collection->sortBy('preis');
        $showCollection->values()->all();

        session()->put('showCollection', $showCollection);
    }

    public function searchInput(Request $request)
    {
            $allInput = $request->all();

            $ortPlz = $request->search;
            $startdate = $request->von;
            $enddate = $request->bis;

            $aMarken = amarke::all();
            $aModelle = amodell::all();
            $fMarken = fmarke::all();
            $fModelle = fmodell::all();

            $this->showAllResults($allInput);

            $showCollection = session()->get('showCollection');

            //aktive Collection in "Ablage" für Filterfunktionen
             session()->put('activeCollection', $showCollection);

            return view('allgemeineSuche', ['aMarken' => $aMarken, 'aModelle' => $aModelle, 'fMarken' => $fMarken,
                'fModelle' => $fModelle,
                'ortPlz' => $ortPlz, 'startdate' => $startdate, 'enddate' => $enddate,
                'showCollection' => $showCollection]);

    }

    function showAllResults($allInput)
    {
        $ortPlz = $allInput["search"];
        $startdate = $allInput["von"];
        $enddate = $allInput["bis"];

        if ($ortPlz) {
            $ortArray = explode(", ", $ortPlz);
            $ort = $ortArray[0];
            $plz = $ortArray[1];

            if ($ort.strpos($ort, " ")) {
                $ortArray1 = explode(" ", $ort);
                $ort = $ortArray1[0];
            }
        }

        if($ortPlz && $startdate && $enddate){
            $aVermietung = autovermietung::where([
                ['ort', 'LIKE', $ort],
                ['postleitzahl', 'LIKE', $plz],
                ['startdate', '<=', $startdate],
                ['enddate', '>=', $enddate]
            ])->get();

            $fVermietung = fahrradvermietung::where([
                ['ort', 'LIKE', $ort],
                ['postleitzahl', 'LIKE', $plz],
                ['startdate', '<=', $startdate],
                ['enddate', '>=', $enddate]
            ])->get();

            $collection = $aVermietung->toBase()->merge($fVermietung);

        }elseif(!$ortPlz && $startdate && $enddate){
            $aVermietung = autovermietung::where([
                ['startdate', '<=', $startdate],
                ['enddate', '>=', $enddate]
            ])->get();

            $fVermietung = fahrradvermietung::where([
                ['startdate', '<=', $startdate],
                ['enddate', '>=', $enddate]
            ])->get();

            $collection = $aVermietung->toBase()->merge($fVermietung);

        }elseif($ortPlz && !$startdate && !$enddate){
            $aVermietung = autovermietung::where([
                ['ort', 'LIKE', $ort],
                ['postleitzahl', 'LIKE', $plz]
            ])->get();

            $fVermietung = fahrradvermietung::where([
                ['ort', 'LIKE', $ort],
                ['postleitzahl', 'LIKE', $plz]
            ])->get();

            $collection = $aVermietung->toBase()->merge($fVermietung);
        }else{
            $aVermietung = autovermietung::all();
            $fVermietung = fahrradvermietung::all();

            $collection = $aVermietung->toBase()->merge($fVermietung);
        }

        $showCollection = $collection->sortBy('preis');
        $showCollection->values()->all();

        session()->put('showCollection', $showCollection);
    }

    public function changeFilterAll()
    {
        $aMarken = amarke::all();
        $aModelle = amodell::all();
        $fMarken = fmarke::all();
        $fModelle = fmodell::all();

        return view('partialViews.FilterAll', ['aMarken' => $aMarken, 'aModelle' => $aModelle, 'fMarken' => $fMarken,
            'fModelle' => $fModelle]);

    }

    public function changeFilterCars()
    {
        $aMarken = amarke::all();
        $aModelle = amodell::all();
        $Kraftstoffe = kraftstoff::all();
        $Baujahre = baujahr::all();

        return view('partialViews.FilterCars', ['aMarken' => $aMarken, 'aModelle' => $aModelle,
            'Kraftstoffe' => $Kraftstoffe, 'Baujahre' => $Baujahre]);

    }

    public function changeFilterBicycles()
    {
        $fArt = art::all();
        $fMarken = fmarke::all();
        $fModelle = fmodell::all();

        return view('partialViews.FilterBicycles', ['fArt' => $fArt, 'fMarken' => $fMarken, 'fModelle' => $fModelle]);

    }

    public function findAutoModelle(Request $request)
    {

        $data = amodell::where('idAmarke', $request->id)->get();
        return response()->json($data);

    }

    public function search(Request $request)
    {

        if ($request->ajax()) {
            $output = "";
            $cities = ort::where('Name', 'LIKE', $request->search . '%')
                ->orWhere('plz', 'Like', $request->search . '%')->get();


            if ($cities) {

                foreach ($cities as $key => $city)
                    $output .= '<li id="cities">' . $city->Name . ', ' . $city->plz . '</li>';
            }
            return Response($output);
        }
    }


    public function searchVehicles(Request $request)
    {
        $checkFilter = $request->checkFilter;

        $Input = $request->all();

        if ($checkFilter == 'all') {

            $this->searchVehiclesAll($Input);

        } else if ($checkFilter == 'cars') {

            $this->searchVehiclesCars($Input);

        } else if ($checkFilter == 'bicycles') {

            $this->searchVehiclesBicycles($Input);
        }

        $collection = session()->get('collection');
        $showCollection = $collection->sortBy('preis');
        $showCollection->values()->all();

        session()->put('activeCollection', $collection);

        return view('partialViews.liveSearch')->with([
            'showCollection' => $showCollection
        ]);
    }

    public function searchVehiclesAll($Input){

        $ort = $Input["ort"];
        $plz = $Input["plz"];
        $startdate = $Input["startdate"];
        $enddate = $Input["enddate"];

        if($ort && $startdate && $enddate){
            $aVermietung = autovermietung::where([
                ['ort', 'LIKE', $ort],
                ['postleitzahl', 'LIKE', $plz],
                ['startdate', '<=', $startdate],
                ['enddate', '>=', $enddate]
            ])->get();

            $fVermietung = fahrradvermietung::where([
                ['ort', 'LIKE', $ort],
                ['postleitzahl', 'LIKE', $plz],
                ['startdate', '<=', $startdate],
                ['enddate', '>=', $enddate]
            ])->get();

            $collection = $aVermietung->toBase()->merge($fVermietung);

        }elseif(!$ort && $startdate && $enddate){
            $aVermietung = autovermietung::where([
                ['startdate', '<=', $startdate],
                ['enddate', '>=', $enddate]
            ])->get();

            $fVermietung = fahrradvermietung::where([
                ['startdate', '<=', $startdate],
                ['enddate', '>=', $enddate]
            ])->get();

            $collection = $aVermietung->toBase()->merge($fVermietung);

        }elseif($ort && !$startdate && !$enddate){
            $aVermietung = autovermietung::where([
                ['ort', 'LIKE', $ort],
                ['postleitzahl', 'LIKE', $plz]
            ])->get();

            $fVermietung = fahrradvermietung::where([
                ['ort', 'LIKE', $ort],
                ['postleitzahl', 'LIKE', $plz]
            ])->get();

            $collection = $aVermietung->toBase()->merge($fVermietung);
        }else{
            $aVermietung = autovermietung::all();
            $fVermietung = fahrradvermietung::all();

            $collection = $aVermietung->toBase()->merge($fVermietung);
        }

        session()->put('collection', $collection);
    }
    public function searchVehiclesCars($Input){

        $ort = $Input["ort"];
        $plz = $Input["plz"];
        $startdate = $Input["startdate"];
        $enddate = $Input["enddate"];;

        if($ort && $startdate && $enddate){
            $aVermietung = autovermietung::where([
                ['ort', 'LIKE', $ort],
                ['postleitzahl', 'LIKE', $plz],
                ['startdate', '<=', $startdate],
                ['enddate', '>=', $enddate]
            ])->get();
            $collection = $aVermietung;

        }elseif(!$ort && $startdate && $enddate){
            $aVermietung = autovermietung::where([
                ['startdate', '<=', $request->startdate],
                ['enddate', '>=', $request->enddate]
            ])->get();
            $collection = $aVermietung;

        }elseif($ort && !$startdate && !$enddate){
            $fVermietung = fahrradvermietung::where([
                ['ort', 'LIKE', $request->ort],
                ['postleitzahl', 'LIKE', $request->plz]
            ])->get();
            $collection = $fVermietung;

        }else{
            $aVermietung = autovermietung::all();
            $collection = $aVermietung;
        }
        session()->put('collection', $collection);
    }
    public function searchVehiclesBicycles($Input){

        $ort = $Input["ort"];
        $plz = $Input["plz"];
        $startdate = $Input["startdate"];
        $enddate = $Input["enddate"];

        if($ort && $startdate && $enddate){
            $fVermietung = fahrradvermietung::where([
                ['ort', 'LIKE', $request->ort],
                ['postleitzahl', 'LIKE', $request->plz],
                ['startdate', '<=', $request->startdate],
                ['enddate', '>=', $request->enddate]
            ])->get();
            $collection = $fVermietung;

        }elseif(!$ort && $startdate && $enddate){
            $fVermietung = fahrradvermietung::where([
                ['startdate', '<=', $request->startdate],
                ['enddate', '>=', $request->enddate]
            ])->get();
            $collection = $fVermietung;

        }elseif($ort && !$startdate && !$enddate){
            $fVermietung = fahrradvermietung::where([
                ['ort', 'LIKE', $request->ort],
                ['postleitzahl', 'LIKE', $request->plz]
            ])->get();
            $collection = $fVermietung;

        }else{
            $fVermietung = fahrradvermietung::all();
            $collection = $fVermietung;
        }
        session()->put('collection', $collection);
    }

    public function searchVehiclesFilter(Request $request)
    {

        $activeCollection = session()->get('activeCollection');

        if ($request->marke) {

            session()->put('request', $request->marke);

            $filtered = $activeCollection->filter(function ($activeCollection) {
                $request = session()->get('request');
                return $activeCollection->marke == $request;
            });
        }
        if ($request->modell) {

            session()->put('request', $request->modell);

            $filtered = $activeCollection->filter(function ($activeCollection) {
                $request = session()->get('request');
                return $activeCollection->modell == $request;
            });
        }
        if ($request->minPreis && $request->maxPreis) {

            session()->put('minPreis', $request->minPreis);
            session()->put('maxPreis', $request->maxPreis);

            $filtered = $activeCollection->filter(function ($activeCollection) {
                $minPreis = session()->get('minPreis');
                $maxPreis = session()->get('maxPreis');
                return $activeCollection->preis >= $minPreis && $activeCollection->preis <= $maxPreis;
            });
        }
        if ($request->kraftstoff) {

            session()->put('request', $request->kraftstoff);

            $filtered = $activeCollection->filter(function ($activeCollection) {
                $request = session()->get('request');
                return $activeCollection->kraftstoff == $request;
            });
        }
        if ($request->baujahr) {

            session()->put('request', $request->baujahr);

            $filtered = $activeCollection->filter(function ($activeCollection) {
                $request = session()->get('request');
                return $activeCollection->baujahr == $request;
            });
        }
        if ($request->art) {

            session()->put('request', $request->art);

            $filtered = $activeCollection->filter(function ($activeCollection) {
                $request = session()->get('request');
                return $activeCollection->art == $request;
            });
        }

        $showCollection = $filtered->sortBy('preis');
        $showCollection->values()->all();


        return view('partialViews.liveSearch')->with([
            'showCollection' => $showCollection
        ]);

        //return response()->json(['test'=>$showCollection]);


    }

}
