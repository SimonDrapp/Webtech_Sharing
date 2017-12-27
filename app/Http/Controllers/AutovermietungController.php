<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AMarke;
use App\AModell;
use App\Kraftstoff;
use App\Auto;
use App\Baujahr;

class AutovermietungController extends Controller
{
    public function prodfunct(){
        $prod = AMarke::all();
        $baujahr = Baujahr::all();
        $kraftstoff = Kraftstoff::all();
        return view('EigenschaftAutovermietung', compact('prod', 'kraftstoff', 'baujahr'));
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

}
