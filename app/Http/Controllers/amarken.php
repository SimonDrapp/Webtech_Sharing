<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;

class amarken extends Controller
{
    public function validateAndSave(Request $request)
    {
        $amarke = new Notification;
        $amarke->name = $request->name;
    }

    public function showAmarke(Request $request){

        $amarke = DB::select('select * from amarke wehere id=1');
        return view('EigenschaftenAutovermietung.blade.php', ['name' =>$amarke]);
    }
}
