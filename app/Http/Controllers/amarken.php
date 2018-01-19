<?php

namespace App\Http\Controllers;

use App\amarke;
use Illuminate\Support\Facades\DB;
use App\amodell;
use Illuminate\Http\Request;
use Illuminate\HTML;
use App\Notification;
use Mockery\Matcher\Not;

class amarken extends Controller
{
    function showall(){

        $amarken = amarke::all();
        $amodelle = amodell::all();

        return view('EigenschaftAutovermietung',['amarken' => $amarken], ['amodelle' => $amodelle]);

        //DB::table('AModell')->select(DB::raw('AModell.aModellname'))->LeftJoin('AMarke', 'AModell.idAmarke', '=', 'AMarke.id')->get();

    }

}
