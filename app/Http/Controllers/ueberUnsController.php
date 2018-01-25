<?php

namespace App\Http\Controllers;

use App\mietungenCounter;
use App\vermietungenCounter;
use Illuminate\Http\Request;
use App\uniqueVisitor;

class ueberUnsController extends Controller
{
    public function index(){

        $visitor = uniqueVisitor::all()->first();
        if(count(vermietungenCounter::all()) == 0){
            $vermietungen = null;
        }else {
            $vermietungen = vermietungenCounter::all()->first();
        }

        if(count(mietungenCounter::all()) == 0){
            $mietungen = null;
        }else {
            $mietungen = mietungenCounter::all()->first();
        }

        return view('ueberUns', ['visitor' => $visitor, 'vermietungen' => $vermietungen, 'mietungen' => $mietungen]);
    }
}
