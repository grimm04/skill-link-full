<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Employees; 

class UserMessage extends Notification implements ShouldQueue
{
    use Queueable;

    protected $message;

    public function __construct(Employees $message)
    {
        $this->message = $message;
    }
  

    public function via($notifiable)
    {
        return ['database'];
    }
    //...
    public function toArray($notifiable)
    {
        return [ 
            'id' => $this->message->id,
            'message_username' => $this->message->username, 
            'avatar' => $this->message->photo,
            'name' => $this->message->fname, $this->message->fname .' '. $this->message->lname,
        ];
    }
}
