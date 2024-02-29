<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\LikeArticle;
use App\Employees; 
class UserLikes extends Notification implements ShouldQueue
{
    use Queueable;

    protected $like;
    protected $post;
    protected $userlike;

    public function __construct(Employees $like, LikeArticle $post, Employees $userlike)
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
            'name' => $this->userlike->fname .' '. $this->userlike->lname,
            'avatar' => $this->userlike->photo,
            'post_id' => $this->post->id_post,
        ];
    } 
}
