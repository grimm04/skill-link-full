<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\Employee;


class Employees extends Authenticatable
{
    use Notifiable;
    protected $guard = 'web';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname','lname','phone','email','password','verification_code','employe_status','levelid','provinceid','child_tradeid','application','web','username','status_share'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function province()
    {
        return $this->belongsTo('App\Models\Province', 'provinceid', 'id');
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new Employee($token));
    }

    public function posts()
    {
        return $this->hasMany('App\Models\PostArticle','id_user');
    }

    public function comments() 
    {
        return $this->hasMany('App\Models\CommentArticle','id_user');
    }
    public function follower() 
    {
        return $this->hasMany('App\Models\Follow','followid');
    }

    public function chtrade() 
    {
        return $this->belongsTo('App\Models\ChildTrade','child_tradeid');
    }



    ///notification

    public function followers() 
    {
        return $this->belongsToMany(self::class, 'follows', 'followid', 'userid')
                    ->withTimestamps();
    }

    public function follows() 
    {
        return $this->belongsToMany(self::class, 'follows', 'userid', 'followid')
                    ->withTimestamps();
    }

    public function follow($userId) 
    {
        $this->follows()->attach($userId);
        return $this;
    }

    public function memberg() 
    {
        return $this->belongsToMany(self::class, 'group_members', 'groupid', 'userid')
                    ->withTimestamps();
    }

    public function unfollow($userId)
    {
        $this->follows()->detach($userId);
        return $this;
    }

    public function isFollowing($userId) 
    {
        return (boolean) $this->follows()->where('followid', $userId)->first(['follows.id']);
    }

        public function status() 
    {
        return $this->belongsTo('App\Models\EmploymentStatus','employe_status');
    }
}
