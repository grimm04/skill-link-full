<?php

namespace App\Observers;

use App\Notifications\ShareProfile;
use App\Employees; 
use Auth; 
class ProfileObserver
{ 
    public function updated(Employees $post)
    {
       $user = Employees::find(Auth::user()->id); 
        foreach ($user->followers as $follower) {
            $follower->notify(new ShareProfile($user, $user));
        } 
    }
}