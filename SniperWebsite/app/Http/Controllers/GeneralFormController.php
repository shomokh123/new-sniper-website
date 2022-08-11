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
            'Adress' => 'required',
            'Services[]' => 'required',
            'Needs[]' => 'required',
            'project_phase' => 'required',
     ]);

      /*  $input= generalForm::create([
            'startup_name' => $request->startup_name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'mobile_number' => $request->mobile_number,
            'Adress' => $request->Adress,
            'Services[]' => $request->Services,
            'Needs[]' => $request->Needs,
            'project_phase' => $request->project_phase,

        ]); 

      $input=generalForm::create($request->all());
        return redirect()->route('/');   
       
        $input['Services'] = $request->input('Services');
        $input['Needs'] = $request->input('Needs'); */

        //generalForm::create($input);

        dd($request->all());
        $input= generalForm::create([
            'startup_name' => $request->startup_name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'mobile_number' => $request->mobile_number,
            'Address' => $request->Address,
            'Services' => implode(",",$request->Services),
            'Needs' => implode(",",$request->Needs[]),
            'project_phase' => $request->project_phase,

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
