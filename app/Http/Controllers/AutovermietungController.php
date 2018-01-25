<?php

namespace App\Http\Controllers;

use App\Vermieten;
use Illuminate\Contracts\Filesystem\Filesystem;
use App\vermietungenCounter;
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
use Storage;

class AutovermietungController extends Controller
{
    public function prodfunct(){
        $amarke = amarke::all();
        $amodell = amodell::all();
        $baujahr = baujahr::all();
        $farbe = farbe::all();
        $kraftstoff = kraftstoff::all();
        return view('EigenschaftAutovermietung', compact('amarke', 'kraftstoff', 'baujahr','farbe', 'amodell'));
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
        $marke = $request->marke;
        $marke2 = substr($marke,3, (strlen($marke)-3));
        $autovermietungen->marke = $marke2;
        $modell = $request->modell;
        $modell2 = substr($modell,3, (strlen($modell)-3));
        $autovermietungen->modell = $modell2;
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

        $request->session()->put('marke', $marke2);
        $request->session()->put('modell', $modell2);
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
    public function saveAuto(Request $request){
        $autovermietung = new autovermietung;
        $autovermietung->marke2 = $request->session()->get('marke');
        $autovermietung->modell2 = $request->session()->get('modell');
        $autovermietung->baujahr = $request->session()->get('baujahr');
        $autovermietung->farbe = $request->session()->get('farbe');
        $autovermietung->kraftstoff = $request->session()->get('kraftstoff');
        $autovermietung->preis = $request->session()->get('preis');
        $autovermietung->bild = $request->session()->get('bild');
        $autovermietung->details = $request->session()->get('details');
        $autovermietung->postleitzahl = $request->session()->get('postleitzahl');
        $autovermietung->ort = $request->session()->get('ort');
        $autovermietung->strasseNr = $request->session()->get('strasseNr');
        $autovermietung->startdate = $request->session()->get('startdate');
        $autovermietung->enddate = $request->session()->get('enddate');

        $countVermietungen = vermietungenCounter::all();
            if(count($countVermietungen) == 0){
            DB::table('vermietungenCounter')->insert(['views' => 1]);
            }else {
                DB::table('vermietungenCounter')->increment('views', 1);
            }


        DB::table('autovermietung')->insert(['name' => "Auto",'marke'=>$autovermietung->marke2,
            'modell'=>$autovermietung->modell2, 'baujahr'=>$autovermietung->baujahr,'farbe'=>$autovermietung->farbe,
            'kraftstoff'=>$autovermietung->kraftstoff,'preis'=>$autovermietung->preis, 'bild'=>$autovermietung->bild,
            'details'=>$autovermietung->details, 'postleitzahl'=>$autovermietung->postleitzahl, 'ort'=>$autovermietung->ort,
            'strasseNr'=>$autovermietung->strasseNr, 'startdate'=>$autovermietung->startdate, 'enddate'=>$autovermietung->enddate]);

        $aAdresses = autovermietung::all();
        $fAdresses = fahrradvermietung::all();
        return view('welcome',['aAdresses' => $aAdresses, 'fAdresses' => $fAdresses]);

    }
    public function uploadFileToS3(Request $request)
    {
        $image = $request->file('fileToUpload');

        $imageFileName = time() . '.' . $image->getClientOriginalExtension();



        $s3 = Storage::disk('s3');

        $filePath = 'https://s3.eu-central-1.amazonaws.com/weteuploadss2017/' . $imageFileName;
        $s3->put($filePath, file_get_contents($image), 'public');

        return view('upload',["filename" => $filePath]);

    }

}
