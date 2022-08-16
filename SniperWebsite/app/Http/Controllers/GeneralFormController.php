<?php

namespace App\Http\Controllers;
use App\Exports\GeneralFormExport;
use Maatwebsite\Excel\Facades\Excel;


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

        $input=$request->validate([
            'startup_name' => 'required|min:2',
            'first_name' => 'required|string|min:2',
            'last_name' => 'required|string|min:2',
            'email' => 'required|email',
            'mobile_number' => 'required|numeric',
            'address' => 'required|min:2',
            'services' => 'required',
            'needs' => 'required',
            'project_phase' => 'required',
     ],);

    
       // dd($request->all());
        $input=([
            'startup_name' => $request->startup_name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'mobile_number' => $request->mobile_number,
            'address' => $request->address,
            'services' => implode(",",$request->services),
            'needs' => implode(",",$request->needs),
            'project_phase' => $request->project_phase,

        ]);
        generalForm::create($input);
         return view('formMessage');
       
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

  
    public function destroy($id)
    {
        $form = generalForm::where('id' , $id );
        $form->delete($id);
        return redirect('/request')->with('success','The Form has been Deleted Successfully');
    }

    public function export()
    {
        
        return Excel::download(new GeneralFormExport, 'SniperApplayRequest.xlsx');
    }
}
