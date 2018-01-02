<?php

namespace App\Http\Controllers;

use App\Vermieten;
use Illuminate\Http\Request;
use App\AMarke;
use App\AModell;
use App\Kraftstoff;
use App\Auto;
use App\Baujahr;
use App\Art;
use App\Farbe;
use DB;
use App\autovermietung;
use Session;
use App\Cart;

class AutovermietungController extends Controller
{
    public function prodfunct(){
        $amarke = AMarke::all();
        $amodell = AModell::all();
        $vermieten = Vermieten::all();
        $baujahr = Baujahr::all();
        $farbe = Farbe::all();
        $kraftstoff = Kraftstoff::all();
        return view('EigenschaftAutovermietung', compact('amarke', 'kraftstoff', 'baujahr','farbe', 'vermieten','amodell'));
    }

    public function findModellName(Request $request){
        $data= aModell::select('aModellname', 'id')->where('idAmarke', $request->id)->take(100)->get();
                                                                //falls beide id's übereinstimmen werden die ersten 100 ausgegeben
        // $request->id wert des ausgewählten ersten selects (also die id)
        return response()->json($data);     //hier wird die information dann an ajax success gesendet
    }

    public function findAutotyp(Request $request){
        $autotyp= Auto::select('details', 'id')->where('idAmodell', $request->id)->take(100)->get();
                                                                //falls beide id's übereinstimmen werden die ersten 100 ausgegeben
        // $request->id wert des ausgewählten ersten selects (also die id)
        return response()->json($autotyp);     //hier wird die information dann an ajax success gesendet
    }

    public function putCar(Request $request){
        $autovermietungen = new autovermietung;
        $autovermietungen->marke = $request->marke;
        $autovermietungen->modell = $request->modell;
        $autovermietungen->baujahr = $request->baujahr;
        $autovermietungen->farbe = $request->farbe;
        $autovermietungen->kraftstoff = $request->kraftstoff;
        $autovermietungen->preis = $request->preis;
        $autovermietungen->bild = $request->bild;
        $autovermietungen->details = $request->details;
        $autovermietungen->postleitzahl = $request->postleitzahl;
        $autovermietungen->ort = $request->ort;
        $autovermietungen->strasseNr = $request->strasseNr;
        $autovermietungen->startdate = $request->startdate;
        $autovermietungen->enddate = $request->enddate;

        $request->session()->put('marke', $request->marke);
        $request->session()->put('modell', $request->modell);
        $request->session()->put('baujahr', $request->baujahr);
        $request->session()->put('farbe', $request->farbe);
        $request->session()->put('kraftstoff', $request->kraftstoff);
        $request->session()->put('preis', $request->preis);
        $request->session()->put('bild', $request->bild);
        $request->session()->put('details', $request->details);
        $request->session()->put('postleitzahl', $request->postleitzahl);
        $request->session()->put('ort', $request->ort);
        $request->session()->put('strasseNr', $request->strasseNr);
        $request->session()->put('startdate', $request->startdate);
        $request->session()->put('enddate', $request->enddate);

        return view('EigenschaftAutovermietung2',['autovermietungen'=>$autovermietungen]);

    }
}
