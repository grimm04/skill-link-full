<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecruitmentController extends Controller
{
    public function dashboad(){
    	return view('recruitments.dashboad');
    }

    public function profile(){
    	return view('recruitments.profile.profile');
    }

    public function candidates(){
    	return view('recruitments.candidates.candidates');
    }
    public function campaigns(){
    	return view('recruitments.campaigns.campaigns');
    } 
    public function inbox(){
        return view('recruitments.inbox.inbox');
    }
    public function notification(){
        return view('recruitments.notification.notification');
    }
    public function interview(){
        return view('recruitments.interview.interview');
    }
    public function saved(){
        return view('recruitments.saved.saved');
    }
    public function employegrader(){
        return view('recruitments.employegrader.employegrader');
    } 
    public function user(){
        return view('recruitments.users.user');
    }
    public function setting(){
        return view('recruitments.setting.setting');
    }
    public function settingedit(){
        return view('recruitments.setting.edit');
    }
    public function help(){
        return view('recruitments.help.help');
    }
    
}
