<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Registerform;
use App\Http\Requests\Admin\Projectregisterform;
use Session;



class RegisterformController extends Controller
{                // (function name create 
                 //inside route  )  (request name ) which was create by using php commond 
    public function registerForm(Projectregisterform $request){
                     //   (object)
        $Registerform = new Registerform;
        $Registerform->name = $request->name; 
        $Registerform->location= $request->location; 
        $Registerform->country= $request->country;   
        $Registerform->rate = $request->rate;              
        $Registerform->price= $request->price;   
        $Registerform->email= $request->email;   
        $Registerform->message = $request->message;   
        
        $Registerform->save();  
                    //(create function) (message)
        Session::flash('saveProject','Project is successfully added!');

        return redirect('/registerforms');  //opne page link


    }

    public function getdetails(){

        $data=Registerform::select('id','name','location','country','rate','price','email','message')->get();
    
        return view('detail',compact('data'));
       }



       public function getedit(Request $request){
            $id = $_GET['id'];
            // update query in laravel
            $data=Registerform::select('id','name','location','country','rate','price','email','message')->where('id',$id)->first();
       
        return view('editDetail',compact('data'));
       }

       public function update(Request $request){      

            $updateArray = [ 
                'name' => $request->name, 
                'location' => $request->location,
                'country' =>$request->country,
                'rate' => $request->rate,
                'price' => $request->price,
                'email' => $request->email,
                'message' => $request->message
            ];
        Registerform::where('id',$request->fromId)->update($updateArray);

        //alternate method
        
       // $id = $request->fromId;
      //  Registerform::where('id',$id)->update($request->except(['_token','fromId','submit']));

        return redirect('/details'); 
       }

       public function delete(Request $request){
        $id = $_GET['id'];

        Registerform::where('id',$id)->delete();// update query in laravel
       
        return redirect('/details'); 
   }

}
