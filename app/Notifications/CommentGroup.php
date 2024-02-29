<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\CommentArticle;
use App\Employees; 
class CommentGroup extends Notification implements ShouldQueue
{
    use Queueable;

    protected $comments;
    protected $post;
    protected $usercomments;
    protected $group;

    public function __construct(Employees $comments,  CommentArticle $post, Employees $usercomments,$group)
    {
        $this->comments = $comments;
        $this->usercomments = $usercomments;
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
            'id' => $this->usercomments->id, 
            'name'  => $this->usercomments->fname .' '. $this->usercomments->lname, 
            'avatar'     => $this->usercomments->photo, 
            'post_id' => $this->post->id_post,  
            'group_ref'  => $this->group->ref_number,
            'group_name' => $this->group->group_name,
            'group_id'   => $this->group->id
        ];
    }
}
