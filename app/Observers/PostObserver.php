<?php

namespace App\Observers;

use App\Notifications\NewPost;
use App\Models\PostArticle; 

class PostObserver
{ 
    public function created(PostArticle $post)
    {
        $user = $post->users;
        foreach ($user->followers as $follower) {
            $follower->notify(new NewPost($user, $post));
        }
    }
}