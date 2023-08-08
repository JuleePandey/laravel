<?php

namespace App\Http\Controllers\Admin;
//(all create file will connect like model,request controller)
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\ProjectFromRequest;
use App\Models\Admin\Projecform;
use Session;

 // connect data base
class ProjectformController extends Controller
{
    public function Projectform(ProjectFromRequest $request){
     //  use to check  dd($request->all());
        $Projecform = new Projecform;// insert query for laravel 

       //        (table_colun  )      (form value)
        $Projecform->name = $request->project_name; 
        $Projecform->start_date = $request->start; 
        $Projecform->end_date = $request->end;   
        $Projecform->rate = $request->rate;              
        $Projecform->price_type = $request->price;   
        $Projecform->required = $request->require;   
        $Projecform->invoice_time = $request->invoice;   
        $Projecform->priority = $request->priority;   
        $Projecform->message = $request->message; 
        $Projecform->save();  
        
        
        Session::flash('saveProject','Project is successfully added!');// message 
        return redirect('/projectforms'); 
        //       ( page url where we will go)       
}

public function getlists(){

    $data=Projecform::select('id','name','start_date','end_date','rate','price_type','required','invoice_time','priority','message')->get();

    return view('lists',compact('data'));
   }

}