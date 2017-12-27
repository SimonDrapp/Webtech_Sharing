<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Art;
use App\FMarke;
use App\FModell;

class FahrradvermietungController extends Controller
{
   public function findFahrrad(){

       $fahrradArt= Art::all();
       return view('Fahrradvermietung', compact('fahrradArt'));
    }

    public function findMarkeNameFahrrad(Request $request){
        $data= FMarke::select('name', 'id')->where('idArt', $request->id)->take(100)->get();
        return response()->json($data);
    }

    public function findModellNameFahrrad(Request $request){
        $data= FModell::select('name', 'id')->where('idMarke', $request->id)->take(100)->get();
        return response()->json($data);
    }
}
