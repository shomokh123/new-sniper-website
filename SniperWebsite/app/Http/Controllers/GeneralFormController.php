<?php

namespace App\Http\Controllers;

use App\Models\generalForm;
use Illuminate\Http\Request;

class GeneralFormController extends Controller
{
   
    public function index()
    {
    //
    }

    
    public function create()
    {
     return view('getStarted');
    }

 
    public function store(Request $request)
    {
        $request->validate([
            'startup_name' => 'required',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'mobile_number' => 'required|numeric|min:10|max:10',
            'address' => 'required',
            'services' => 'required',
            'needs' => 'required',
            'project_phase' => 'required',
     ]);

    
       // dd($request->all());
        $input= generalForm::create([
            'startup_name' => $request->startup_name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'mobile_number' => $request->mobile_number,
            'address' => $request->Address,
            'services[]' => implode(",",$request->Services[]),
            'needs[]' => implode(",",$request->Needs[]),
            'project_phase[]' => implode(",",$request->project_phase),

        ]); 

        return redirect()->back();
    }


    public function show(generalForm $generalForm)
    {
        //
    }

  
    public function edit(generalForm $generalForm)
    {
        //
    }

 
    public function update(Request $request, generalForm $generalForm)
    {
        //
    }

  
    public function destroy(generalForm $generalForm)
    {
        //
    }
}
