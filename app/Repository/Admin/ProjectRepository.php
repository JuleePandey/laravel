<?php 
namespace App\Repository\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Interfaces\Admin\ProjectInterface;
use App\Models\Admin\Project;


class ProjectRepository implements ProjectInterface
{
    
    public function storeProject($request){  

        $ProjectModel = new Project;
        $ProjectModel->project_name = $request['project_name']; 
        $ProjectModel->start_date = $request['start']; 
        $ProjectModel->end_date = $request['end'];   
        $ProjectModel->rate = $request['rate'];              
        $ProjectModel->price_type = $request['price'];   
        $ProjectModel->required = $request['require'];   
        $ProjectModel->invoice_time = $request['invoice'];   
        $ProjectModel->priority = $request['priority'];   
        $ProjectModel->message = $request['message']; 
        $ProjectModel->save();  

         return $ProjectModel->id;

}


}
?>