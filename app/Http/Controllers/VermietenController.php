<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VermietenController extends Controller
{

    public function check(){

        return view('Vermieten');
    //    return redirect('/Vermieten',200);
     //   return response('lol',200);
    }
}
