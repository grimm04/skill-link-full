<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth; 
class NotificationFrontController extends Controller
{
    public function notification()
    {	
 		$notifications = DB::table('notifications')
        ->leftJoin('employees' ,'notifications.notifiable_id', '=', 'employees.id')
        ->select('notifications.*',  
            'employees.fname as fname',
            'employees.lname as lname'
        ) 
        ->orderBy('notifications.created_at','DESC')
        ->where('notifiable_id',Auth::user()->id)   
         ->get();  
         // dd($user);
    	return view('frontnotification.notification',compact('notifications'));
    }

    public function setting()
    {
    	return view('frontnotification.setting');
    }
}
