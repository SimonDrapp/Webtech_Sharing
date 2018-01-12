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
use App\fahrradvermietung;

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
        $automarke = $request->automarke . " ";
        $automarke2 = substr($automarke,2, (sizeof($automarke)-2));
        $autovermietungen->automarke = $automarke2;
        $automodell = $request->automodell . " ";
        $automodell2 = substr($automodell,2, (sizeof($automodell)-2));
        $autovermietungen->automodell = $automodell2;
        $autovermietungen->autobaujahr = $request->autobaujahr;
        $autovermietungen->autofarbe = $request->autofarbe;
        $autovermietungen->autokraftstoff = $request->autokraftstoff;
        $autovermietungen->autopreis = $request->autopreis;
        $autovermietungen->autobild = $request->autobild;
        $autovermietungen->autodetails = $request->autodetails;
        $autovermietungen->autopostleitzahl = $request->autopostleitzahl;
        $autovermietungen->autoort = $request->autoort;
        $autovermietungen->autostrasseNr = $request->autostrasseNr;
        $autovermietungen->autostartdate = $request->autostartdate;
        $autovermietungen->autoenddate = $request->autoenddate;

        $request->session()->put('automarke', $automarke2);
        $request->session()->put('automodell', $automodell2);
        $request->session()->put('autobaujahr', $request->autobaujahr);
        $request->session()->put('autofarbe', $request->autofarbe);
        $request->session()->put('autokraftstoff', $request->autokraftstoff);
        $request->session()->put('autopreis', $request->autopreis);
        $request->session()->put('autobild', $request->autobild);
        $request->session()->put('autodetails', $request->autodetails);
        $request->session()->put('autopostleitzahl', $request->autopostleitzahl);
        $request->session()->put('autoort', $request->autoort);
        $request->session()->put('autostrasseNr', $request->autostrasseNr);
        $request->session()->put('autostartdate', $request->autostartdate);
        $request->session()->put('autoenddate', $request->autoenddate);

        return view('EigenschaftAutovermietung2',['autovermietungen'=>$autovermietungen]);

    }


    public function saveAuto(Request $request){
        $autovermietung = new autovermietung;
        $autovermietung->automarke2 = $request->session()->get('automarke');
        $autovermietung->automodell2 = $request->session()->get('automodell');
        $autovermietung->autobaujahr = $request->session()->get('autobaujahr');
        $autovermietung->autofarbe = $request->session()->get('autofarbe');
        $autovermietung->autokraftstoff = $request->session()->get('autokraftstoff');
        $autovermietung->autopreis = $request->session()->get('autopreis');
        $autovermietung->autobild = $request->session()->get('autobild');
        $autovermietung->autodetails = $request->session()->get('autodetails');
        $autovermietung->autopostleitzahl = $request->session()->get('autopostleitzahl');
        $autovermietung->autoort = $request->session()->get('autoort');
        $autovermietung->autostrasseNr = $request->session()->get('autostrasseNr');
        $autovermietung->autostartdate = $request->session()->get('autostartdate');
        $autovermietung->autoenddate = $request->session()->get('autoenddate');



        DB::table('autovermietung')->insert(['automarke'=>$autovermietung->automarke2,
            'automodell'=>$autovermietung->automodell2, 'autobaujahr'=>$autovermietung->autobaujahr,'autofarbe'=>$autovermietung->autofarbe,
            'autokraftstoff'=>$autovermietung->autokraftstoff,'autopreis'=>$autovermietung->autopreis, 'autobild'=>$autovermietung->autobild,
            'autodetails'=>$autovermietung->autodetails, 'autopostleitzahl'=>$autovermietung->autopostleitzahl, 'autoort'=>$autovermietung->autoort,
            'autostrasseNr'=>$autovermietung->autostrasseNr, 'autostartdate'=>$autovermietung->autostartdate, 'autoenddate'=>$autovermietung->autoenddate]);

        $aAdresses = autovermietung::all();
        $fAdresses = fahrradvermietung::all();
        return view('welcome',['aAdresses' => $aAdresses, 'fAdresses' => $fAdresses]);

    }

}
