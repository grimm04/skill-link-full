<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\PostArticle;
use App\Employees;
 
class PostGroup extends Notification implements ShouldQueue
{
    use Queueable;

    protected $user;
    protected $post;
    protected $group;

    public function __construct(Employees $user, PostArticle $post, $group)
    {
        $this->user = $user;
        $this->post = $post;
        $this->group = $group;
    } 

     public function via($notifiable)
    {
        return ['database'];
    } 
    public function toArray($notifiable)
    {
        return [
            'id' => $this->user->id,
            'name' => $this->user->fname .' '. $this->user->lname,
            'avatar' => $this->user->photo,
            'post_id' => $this->post->id,
            'group_name' => $this->group->group_name,
            'group_id' => $this->group->id
        ];
    }
}
