<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('employee.login');
    } 

    public function forgot(){
        return view('employee.forgot');
    }  

     public function forgotresult(){
        return view('employee.forgotresult');
    }  
}
