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

        public function destroy($id) {
          DB::delete('delete from general_forms where id = ?',[$id]);
          echo "Record deleted successfully.<br/>";
          echo '<a href = "/delete-records">Click Here</a> to go back.';
       }
}
