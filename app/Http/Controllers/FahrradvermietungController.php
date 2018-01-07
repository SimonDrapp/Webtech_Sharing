<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate;

use Session;
use DB;
use App\Art;
use App\FMarke;
use App\FModell;
use App\Farbe;
use App\fahrradvermietung;
use App\Fahrrad;

class FahrradvermietungController extends Controller
{
   public function findFahrrad(){

       $fahrradArt= Art::all();
       $fahrradModell = FModell::all();
       $fahrradFarbe= Farbe::all();
       return view('Fahrradvermietung', compact('fahrradArt', 'fahrradFarbe', 'fahrradModell'));
    }

    public function findMarkeNameFahrrad(Request $request){
        $data= FMarke::select('name', 'id')->where('idArt', $request->id)->take(100)->get();
        return response()->json($data);
    }

    public function findModellNameFahrrad(Request $request){
        $data= FModell::select('name', 'id')->where('idMarke', $request->id)->take(100)->get();
        return response()->json($data);
    }


    public function putFahrrad(Request $request){

        $fahrradvermietungen = new fahrradvermietung;
        $fahrradvermietungen->art = $request->art;
        $fahrradvermietungen->marke = $request->marke;
        $fahrradvermietungen->modell = $request->modell;
        $fahrradvermietungen->farbe = $request->farbe;
        $fahrradvermietungen->preis = $request->preis;
        $fahrradvermietungen->bild = $request->bild;
        $fahrradvermietungen->details = $request->details;
        $fahrradvermietungen->postleitzahl = $request->postleitzahl;
        $fahrradvermietungen->ort = $request->ort;
        $fahrradvermietungen->strasseNr = $request->strasseNr;
        $fahrradvermietungen->startdate = $request->startdate;
        $fahrradvermietungen->enddate = $request->enddate;


        $request->session()->put('art', $request->art);
        $request->session()->put('marke', $request->marke);
        $request->session()->put('modell', $request->modell);
        $request->session()->put('farbe', $request->farbe);
        $request->session()->put('preis', $request->preis);
        $request->session()->put('bild', $request->bild);
        $request->session()->put('details', $request->details);
        $request->session()->put('postleitzahl', $request->postleitzahl);
        $request->session()->put('ort', $request->ort);
        $request->session()->put('strasseNr', $request->strasseNr);
        $request->session()->put('startdate', $request->startdate);
        $request->session()->put('enddate', $request->enddate);


        return view('Fahrradvermietung2',['fahrradvermietungen'=>$fahrradvermietungen]);

    }

    public function saveFahrrad(Request $request){

        $fahrradvermietung = new fahrradvermietung;
        $fahrradvermietung->art = $request->session()->get('art');
        $fahrradvermietung->marke = $request->session()->get('marke');
        $fahrradvermietung->modell = $request->session()->get('modell');
        $fahrradvermietung->farbe = $request->session()->get('farbe');
        $fahrradvermietung->preis = $request->session()->get('preis');
        $fahrradvermietung->bild = $request->session()->get('bild');
        $fahrradvermietung->details = $request->session()->get('details');
        $fahrradvermietung->postleitzahl = $request->session()->get('postleitzahl');
        $fahrradvermietung->ort = $request->session()->get('ort');
        $fahrradvermietung->strasseNr = $request->session()->get('strasseNr');
        $fahrradvermietung->startdate = $request->session()->get('startdate');
        $fahrradvermietung->enddate = $request->session()->get('enddate');


            DB::table('fahrradvermietung')->insert(['art'=>$fahrradvermietung->art, 'marke'=>$fahrradvermietung->marke,
            'modell'=>$fahrradvermietung->modell, 'farbe'=>$fahrradvermietung->farbe, 'preis'=>$fahrradvermietung->preis,
            'bild'=>$fahrradvermietung->bild, 'details'=>$fahrradvermietung->details, 'postleitzahl'=>$fahrradvermietung->postleitzahl,
            'ort'=>$fahrradvermietung->ort, 'strasseNr'=>$fahrradvermietung->strasseNr, 'startdate'=>$fahrradvermietung->startdate,
            'enddate'=>$fahrradvermietung->enddate]);

            return view('Vermieten');

            }


}
