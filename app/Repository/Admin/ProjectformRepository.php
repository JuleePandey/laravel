<?php 
namespace App\Repository\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Interfaces\Admin\ProjectformInterface;
use App\Models\Admin\Project;

class ProjectformRepository implements ProjectformInterface{

    public function Projectform($request){
    
           $Projecform = new Projecform;
   
       
           $Projecform->name = $request['project_name']; 
           $Projecform->start_date = $request ['start']; 
           $Projecform->end_date = $request ['end'];   
           $Projecform->rate = $request  ['rate'];              
           $Projecform->price_type = $request ['price'];   
           $Projecform->required = $request ['require'];   
           $Projecform->invoice_time = $request ['invoice'];   
           $Projecform->priority = $request ['priority'];   
           $Projecform->message = $request ['message']; 
           $Projecform->save();  
           
           
       
           return $ProjectModel->id;

               
   }
   








}