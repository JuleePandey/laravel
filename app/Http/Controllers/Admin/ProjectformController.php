<?php

namespace App\Http\Controllers\Admin;
//(all create file will connect like model,request controller)
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\ProjectFromRequest;
use App\Models\Admin\Projecform;
use Session;
use App\Interfaces\Admin\ProjectformServiceInterface;

 // connect data base
class ProjectformController extends Controller
{
    public function __construct(ProjectformServiceInterface $ProjectformServiceInterface) {
        $this->ProjectformServiceInterface = $ProjectformServiceInterface;       
      
    } 

    public function Projectform(ProjectFromRequest $request){        
        
        $data = $this->ProjectformServiceInterface->Projectform($request->all());

       if(!empty($data)){
        Session::flash('saveProject','Project is successfully added!');
        return redirect('/projectforms');  

       }
       else{
        Session::flash('notSave','Something went Wrong!');
        return redirect('/projectforms');  
       }
        
       

    }

public function getlists(){

    $data=Projecform::select('id','name','start_date','end_date','rate','price_type','required','invoice_time','priority','message')->get();

    return view('lists',compact('data'));
   }

}