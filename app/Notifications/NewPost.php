<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\PostArticle;
use App\Employees;

class NewPost extends Notification implements ShouldQueue
{
    use Queueable;

    protected $following;
    protected $post;

    public function __construct(Employees $following, PostArticle $post)
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
            'avatar' => $this->following->photo,
            'post_id' => $this->post->id,
        ];
    }
}
