<?php

namespace App\Http\Controllers;

use App\fahrradvermietung;
use Illuminate\Http\Request;
use App\autovermietung;

class welcomeController extends Controller
{
    public function index(){
        $aAdresses = autovermietung::all();
        $fAdresses = fahrradvermietung::all();
        return view('welcome',['aAdresses' => $aAdresses, 'fAdresses' => $fAdresses]);
    }
}
