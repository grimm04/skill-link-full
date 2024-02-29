<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Employees; 

class UserFollowed extends Notification implements ShouldQueue
{
    use Queueable;

    protected $follower;

    public function __construct(Employees $follower)
    {
        $this->follower = $follower;
    }
  

    public function via($notifiable)
    {
        return ['database'];
    }
    //...
    public function toArray($notifiable)
    {
        return [ 
            'id' => $this->follower->id,
            'username' => $this->follower->username,
            'name' => $this->follower->fname, 
            'avatar' => $this->follower->photo,
        ];
    }
}
