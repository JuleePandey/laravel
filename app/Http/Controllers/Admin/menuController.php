<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class menuController extends Controller
{
    public function getClient(){
        return view('clients');
    } 

    public function getteam(){
        return view('teams');
    } 
    
    public function getproject(){
        return view('project');
    } 
    
    public function gettask(){
        return view('task');
    } 
    
    public function getkanbanboard(){
        return view('kanban-board');
    } 

    public function getchat(){
        return view('chat');
    } 

    public function getuser(){
        return view('users');
    } 
    public function getcreate(){
        return view('create');
    } 

    public function getform(){
        return view('form');
    } 

    public function getprojectform(){
        return view('projectform');
    } 
  
    public function getregisterform(){
        return view('registerform');
    } 

    public function getcreateform(){
        return view('createform');
    } 





}

