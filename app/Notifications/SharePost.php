<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\LikeArticle;
use App\Employees; 
class SharePost extends Notification
{
    use Queueable;

    protected $like;
    protected $post;
    protected $userlike;

    public function __construct(Employees $like, PostArticle $post, Employees $userlike)
    {
        $this->userlike = $userlike;
        $this->post = $post;
    } 

     public function via($notifiable)
    {
        return ['database'];
    } 
    public function toArray($notifiable)
    {
        return [
            'id' => $this->userlike->id,
            'name' => $this->userlike->fname,
            'post_id' => $this->post->id_post,
        ];
    } 
}
