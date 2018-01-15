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

class allgemeineSucheController extends Controller
{
    public function index()
    {
        $aMarken = AMarke::all();
        $aModelle = AModell::all();
        $fMarken = FMarke::all();
        $fModelle = FModell::all();

       /* $aVermietung = autovermietung::all();
        $fVermietung = fahrradvermietung::all();*/

       //$this->showAllResults();

        return view('allgemeineSuche', ['aMarken' => $aMarken, 'aModelle' => $aModelle, 'fMarken' => $fMarken,
            'fModelle' => $fModelle]);
    }

    /*function showAllResults(){

        $aVermietung = autovermietung::all();
        $fVermietung = fahrradvermietung::all();
        $collection = $aVermietung->toBase()->merge($fVermietung);

        session()->put('activeCollection', $collection);
        $showCollection= $collection->sortBy('preis');
        $showCollection->values()->all();


        return $showCollection;
     }*/

    public function changeFilterAll()
    {
        $aMarken = AMarke::all();
        $aModelle = AModell::all();
        $fMarken = FMarke::all();
        $fModelle = FModell::all();

        return view('partialViews.FilterAll',['aMarken' => $aMarken, 'aModelle' => $aModelle, 'fMarken' => $fMarken,
            'fModelle' => $fModelle]);

    }

    public function changeFilterCars()
    {
        $aMarken = AMarke::all();
        $aModelle = AModell::all();
        $Kraftstoffe = Kraftstoff::all();
        $Baujahre = Baujahr::all();

        return view('partialViews.FilterCars',['aMarken' => $aMarken, 'aModelle' => $aModelle,
            'Kraftstoffe' => $Kraftstoffe, 'Baujahre' => $Baujahre]);

    }

    public function changeFilterBicycles()
    {
        $fArt = Art::all();
        $fMarken = FMarke::all();
        $fModelle = FModell::all();

        return view('partialViews.FilterBicycles',['fArt' => $fArt, 'fMarken' => $fMarken, 'fModelle' => $fModelle]);

    }

    public function findAutoModelle(Request $request)
    {

        $data = AModell::where('idAmarke', $request->id)->get();
        return response()->json($data);

    }

    public function search(Request $request)
    {

        if ($request->ajax()) {
            $output = "";
            $cities = Ort::where('Name', 'LIKE', $request->search . '%')
                ->orWhere('plz', 'Like', $request->search . '%')->get();


            if ($cities) {

                foreach ($cities as $key => $city)
                    $output .= '<li id="test">' . $city->Name . ', ' . $city->plz . '</li>';
            }
            return Response($output);
        }
    }



    public function searchVehicles(Request $request)
    {
        $countVar = count($_GET);
        $checkFilter = $request->checkFilter;


        if($checkFilter == 'all') {
            switch ($countVar) {
                case 1:
                    $aVermietung = autovermietung::all();
                    $fVermietung = fahrradvermietung::all();

                    $collection = $aVermietung->toBase()->merge($fVermietung);

                    break;
                case 3:
                    $aVermietung = autovermietung::where([
                        ['ort', 'LIKE', $request->ort],
                        ['postleitzahl', 'LIKE', $request->plz]
                    ])->get();

                    $fVermietung = fahrradvermietung::where([
                        ['ort', 'LIKE', $request->ort],
                        ['postleitzahl', 'LIKE', $request->plz]
                    ])->get();

                    $collection = $aVermietung->toBase()->merge($fVermietung);
                    break;
                case 4:
                    $aVermietung = autovermietung::where([
                        ['startdate', '<=', $request->startdate],
                        ['enddate', '>=', $request->enddate]
                    ])->get();

                    $fVermietung = fahrradvermietung::where([
                        ['startdate', '<=', $request->startdate],
                        ['enddate', '>=', $request->enddate]
                    ])->get();

                    $collection = $aVermietung->toBase()->merge($fVermietung);
                    break;
                case 5:
                    $aVermietung = autovermietung::where([
                        ['ort', 'LIKE', $request->ort],
                        ['postleitzahl', 'LIKE', $request->plz],
                        ['startdate', '<=', $request->startdate],
                        ['enddate', '>=', $request->enddate]
                    ])->get();

                    $fVermietung = fahrradvermietung::where([
                        ['ort', 'LIKE', $request->ort],
                        ['postleitzahl', 'LIKE', $request->plz],
                        ['startdate', '<=', $request->startdate],
                        ['enddate', '>=', $request->enddate]
                    ])->get();

                    $collection = $aVermietung->toBase()->merge($fVermietung);
                    break;
            }
        }else if($checkFilter == 'cars'){
            switch ($countVar) {
                case 1:
                    $aVermietung = autovermietung::all();
                    $collection = $aVermietung;
                    break;
                case 3:
                    $aVermietung = autovermietung::where([
                        ['ort', 'LIKE', $request->ort],
                        ['postleitzahl', 'LIKE', $request->plz]
                    ])->get();
                    $collection = $aVermietung;
                    break;
                case 4:
                    $aVermietung = autovermietung::where([
                        ['startdate', '<=', $request->startdate],
                        ['enddate', '>=', $request->enddate]
                    ])->get();
                    $collection = $aVermietung;
                    break;
                case 5:
                    $aVermietung = autovermietung::where([
                        ['ort', 'LIKE', $request->ort],
                        ['postleitzahl', 'LIKE', $request->plz],
                        ['startdate', '<=', $request->startdate],
                        ['enddate', '>=', $request->enddate]
                    ])->get();
                    $collection = $aVermietung;
                    break;
            }
        }else if($checkFilter == 'bicycles'){
            switch ($countVar) {
                case 1:
                    $fVermietung = fahrradvermietung::all();
                    $collection = $fVermietung;
                    break;
                case 3:
                    $fVermietung = fahrradvermietung::where([
                        ['ort', 'LIKE', $request->ort],
                        ['postleitzahl', 'LIKE', $request->plz]
                    ])->get();
                    $collection = $fVermietung;
                    break;
                case 4:
                    $fVermietung = fahrradvermietung::where([
                        ['startdate', '<=', $request->startdate],
                        ['enddate', '>=', $request->enddate]
                    ])->get();
                    $collection = $fVermietung;
                    break;
                case 5:
                    $fVermietung = fahrradvermietung::where([
                        ['ort', 'LIKE', $request->ort],
                        ['postleitzahl', 'LIKE', $request->plz],
                        ['startdate', '<=', $request->startdate],
                        ['enddate', '>=', $request->enddate]
                    ])->get();
                    $collection = $fVermietung;
                    break;
            }
        }

        $sorted= $collection->sortBy('preis');
        $sorted->values()->all();

        $showCollection= $collection->sortBy('preis');
        $showCollection->values()->all();

         session()->put('activeCollection', $collection);

        return view('partialViews.liveSearch')->with([
           'showCollection' => $showCollection
        ]);
    }

    public function searchVehiclesFilter(Request $request){

        $activeCollection = session()->get('activeCollection');

        if($request->marke) {

            session()->put('request', $request->marke);

            $filtered = $activeCollection->filter(function ($activeCollection) {
                $request = session()->get('request');
                return $activeCollection->marke == $request;
            });
        }
        if($request->modell) {

            session()->put('request', $request->modell);

            $filtered = $activeCollection->filter(function ($activeCollection) {
                $request = session()->get('request');
                return $activeCollection->modell == $request;
            });
        }
        if($request->minPreis && $request->maxPreis) {

            session()->put('minPreis', $request->minPreis);
            session()->put('maxPreis', $request->maxPreis);

            $filtered = $activeCollection->filter(function ($activeCollection) {
                $minPreis = session()->get('minPreis');
                $maxPreis = session()->get('maxPreis');
                return $activeCollection->preis >= $minPreis && $activeCollection->preis <= $maxPreis;
            });
        }
        if($request->kraftstoff) {

            session()->put('request', $request->kraftstoff);

            $filtered = $activeCollection->filter(function ($activeCollection) {
                $request = session()->get('request');
                return $activeCollection->kraftstoff == $request;
            });
        }
        if($request->baujahr) {

            session()->put('request', $request->baujahr);

            $filtered = $activeCollection->filter(function ($activeCollection) {
                $request = session()->get('request');
                return $activeCollection->baujahr == $request;
            });
        }
        if($request->art) {

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
