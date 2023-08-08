<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Project;
use App\Http\Requests\Admin\ProjectFromRequest;
use Session;

class ProjectController extends Controller
{
    public function storeProject(ProjectFromRequest $request){


      
        $ProjectModel = new Project;
        $ProjectModel->project_name = $request->project_name; 
        $ProjectModel->start_date = $request->start; 
        $ProjectModel->end_date = $request->end;   
        $ProjectModel->rate = $request->rate;              
        $ProjectModel->price_type = $request->price;   
        $ProjectModel->required = $request->require;   
        $ProjectModel->invoice_time = $request->invoice;   
        $ProjectModel->priority = $request->priority;   
        $ProjectModel->message = $request->message; 
        $ProjectModel->save();   
        
        Session::flash('saveProject','Project is successfully added!');
        return redirect('/forms');  


    }

    public function getlist(){ 
        //      (model (Project) which is connected to data base )  ,(database column)                                                                (this symble is use to add other function)
        $data = Project::select('id','project_name','start_date','end_date','rate','price_type','required','invoice_time','priority','message')->get();
                                                                                                                                                 //(this function use to get database)              
        return view('list',compact('data'));
        //                  compact is use to then the $data variable is not needed just data will be use 
    } 

//    public function getlists(){

//     $data=Project::select('id','project_name','start_date','end_date','rate','price_type','required','invoice_time','priority','message')->get();

//     return view('lists',compact('data'));
//    }
}
