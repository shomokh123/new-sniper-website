<?php

namespace App\Http\Controllers;
use App\Models\generalForm;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequestController extends Controller
{
    public function detail($id){
        //$event= DB::select('SELECT * FROM general_forms WHERE id= '.$id);
       // $event= generalForm::findorfail($id);
      // $event = generalForm::find($id);
      $events = generalForm::where('id' , $id )->first();

      return view('viewRequest', compact('events'));
        }
}
