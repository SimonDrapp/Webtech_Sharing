<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate;
use App\autovermietung;
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
        $art = $request->art . " ";
        $art2 = substr($art,2, (sizeof($art)-2));
        $fahrradvermietungen->art = $art2;
        $marke = $request->marke . " ";
        $marke2 = substr($marke,2, (sizeof($marke)-2));
        $fahrradvermietungen->marke = $marke2;
        $modell = $request->modell . " ";
        $modell2 = substr($modell,2, (sizeof($modell)-2));
        $fahrradvermietungen->modell = $modell2;
        $fahrradvermietungen->farbe = $request->farbe;
        $fahrradvermietungen->preis = $request->preis;
        $fahrradvermietungen->bild = $request->bild;
        $fahrradvermietungen->details = $request->details;
        $fahrradvermietungen->postleitzahl = $request->postleitzahl;
        $fahrradvermietungen->ort = $request->ort;
        $fahrradvermietungen->strasseNr = $request->strasseNr;
        $fahrradvermietungen->startdate = $request->startdate;
        $fahrradvermietungen->enddate = $request->enddate;


        $request->session()->put('art', $art2);
        $request->session()->put('marke', $marke2);
        $request->session()->put('modell', $modell2);
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
        $fahrradvermietung->art2 = $request->session()->get('art');
        $fahrradvermietung->marke2 = $request->session()->get('marke');
        $fahrradvermietung->modell2 = $request->session()->get('modell');
        $fahrradvermietung->farbe = $request->session()->get('farbe');
        $fahrradvermietung->preis = $request->session()->get('preis');
        $fahrradvermietung->bild = $request->session()->get('bild');
        $fahrradvermietung->details = $request->session()->get('details');
        $fahrradvermietung->postleitzahl = $request->session()->get('postleitzahl');
        $fahrradvermietung->ort = $request->session()->get('ort');
        $fahrradvermietung->strasseNr = $request->session()->get('strasseNr');
        $fahrradvermietung->startdate = $request->session()->get('startdate');
        $fahrradvermietung->enddate = $request->session()->get('enddate');


            DB::table('fahrradvermietung')->insert(['art'=>$fahrradvermietung->art2, 'marke'=>$fahrradvermietung->marke2,
            'modell'=>$fahrradvermietung->modell2, 'farbe'=>$fahrradvermietung->farbe, 'preis'=>$fahrradvermietung->preis,
            'bild'=>$fahrradvermietung->bild, 'details'=>$fahrradvermietung->details, 'postleitzahl'=>$fahrradvermietung->postleitzahl,
            'ort'=>$fahrradvermietung->ort, 'strasseNr'=>$fahrradvermietung->strasseNr, 'startdate'=>$fahrradvermietung->startdate,
            'enddate'=>$fahrradvermietung->enddate]);

        $aAdresses = autovermietung::all();
        $fAdresses = fahrradvermietung::all();
        return view('welcome',['aAdresses' => $aAdresses, 'fAdresses' => $fAdresses]);

            }


}
