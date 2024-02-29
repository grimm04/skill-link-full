<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

use App\Models\Employee;
use App\Employees;

class ShareProfile extends Notification implements ShouldQueue
{
    use Queueable;

    protected $following;
    protected $post;

    public function __construct(Employees $following, Employees $post)
    {
        $this->following = $following;
        $this->post = $post;
    } 

     public function via($notifiable)
    {
        return ['database'];
    } 
    public function toArray($notifiable)
    {
        return [
            'id' => $this->following->id,
            'name' => $this->following->fname .' '. $this->following->lname,
            'following_username' => $this->following->username,
            'avatar' => $this->following->photo,
            'post_id' => $this->post->id,  
        ];
    }
}
