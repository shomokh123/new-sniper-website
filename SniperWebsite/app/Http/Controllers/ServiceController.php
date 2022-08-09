<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function sniperS(){
        return view('welcome', ['data'=>'#services']);
        }
}
