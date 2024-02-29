<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Employees; 

class RequestGroup extends Notification implements ShouldQueue
{
    use Queueable;

    protected $follower;
    protected $group;

    public function __construct(Employees $follower, Groups $group)
    {
        $this->follower = $follower;
        $this->group = $group;
    }
  

    public function via($notifiable)
    {
        return ['database'];
    }
    //...
    public function toArray($notifiable)
    {
        return [ 
            'id'         => $this->follower->id,
            'username'   => $this->follower->username,
            'name'       => $this->follower->fname, 
            'avatar'     => $this->follower->photo,
            'ref_number' => $this->group->ref_number,
        ];
    }
}
