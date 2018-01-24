<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\uniqueVisitor;

class ueberUnsController extends Controller
{
    public function index(){

        $visitor = uniqueVisitor::all()->first();


        return view('ueberUns',['visitor' => $visitor]);
    }
}
