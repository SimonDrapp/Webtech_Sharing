<?php

namespace App\Http\Controllers;

use App\AMarke;
use App\AModell;
use App\fahrradvermietung;
use App\FMarke;
use App\FModell;
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
