<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;
use Mockery\Matcher\Not;

class amarken extends Controller
{
    public function validateAndSave(Request $request)
    {
        $amarke = new Notification;
        $amarke->name = $request->name;

        if ($amarke->save()) {

            return view('showAmarke', ['amarke' => $amarke]);
        } else {
            return view('EigenschaftAutovermietung', ['amarke' => $amarke]);
        }
    }

    public function showAllInputs(Request $request){


    }
}
