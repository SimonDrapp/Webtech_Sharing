<?php

namespace App\Http\Controllers;

use App\fahrradvermietung;
use Illuminate\Http\Request;
use App\autovermietung;
use App\uniqueVisitor;
use DB;

class welcomeController extends Controller
{
    public function index(){

        $this->countVisitor();
        $aAdresses = autovermietung::all();
        $fAdresses = fahrradvermietung::all();
        return view('welcome',['aAdresses' => $aAdresses, 'fAdresses' => $fAdresses]);
    }

    public function countVisitor(){
        $date = date("Y-m-d");
        $userIP = $_SERVER['REMOTE_ADDR'];

        $result = uniqueVisitor::where('date','=',$date)->get();



        if(!isset($_COOKIE['visitor'])){
            $time = strtotime('next day 00:00');
            setcookie('visitor', 'hey', $time);
        }

        if(count($result)==0){

            DB::table('unique_visitors')->insert([
                'date' => $date,
                'ip' => $userIP
            ]);

        }else{

            //$row= $result->first();

            if(!isset($_COOKIE['visitor'])){
                $newIP = $result->ip;

                if(!preg_match('/'.$userIP.'/',$newIP)){

                    $newIP .= $userIP;
                }
                DB::table('unique_visitors')->where('date','=',$date)
                                            ->update(['ip'=>$newIP])
                                            ->increment('views');
            }
        }


    }
}
