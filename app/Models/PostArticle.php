<?php

namespace App\Models;

use Eloquent as Model;
use Auth;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PostArticle
 * @package App\Models
 * @version February 14, 2018, 1:33 pm UTC
 *
 * @property string title
 * @property string post
 * @property integer view
 * @property integer status
 * @property integer id_user
 */

use App\Employees;

class PostArticle extends Model
{
    use SoftDeletes;

    public $table = 'post_articles';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'post',
        'view',
        'status',
        'id_user',
        'groupid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'post' => 'string',
        'view' => 'integer',
        'status' => 'integer',
        'id_user' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'status' => 'required',
        'id_user' => 'exit'
    ];


    public function users()
    {   
         return $this->belongsTo('App\Employees', 'id_user'); 
    }

    public function images_post()
    {   
        return $this->hasOne('App\Models\ImageArticle', 'id_post'); 
    }

    public function comments()
    {   
        return $this->hasMany('App\Models\CommentArticle', 'id_post'); 
    }
    public function likes()
    {    
        return $this->hasMany('App\Models\LikeArticle', 'id_post'); 
    }
    
    public function userlikes()
    {   
        return $this->hasMany('App\Models\LikeArticle','id_post')->where('id_user', Auth::user()->id);
        // return $this->hasMany('App\Models\LikeArticle', 'id_post'); 
    }

    public function user()
    {   
        return $this->belongsTo('App\Employees', 'id_user'); 
    }

    public function follow()
    {   
        return $this->belongsTo('App\Models\Follow','id_user','userid'); 
    }

    public function hide()
    {   
        return $this->belongsTo('App\Models\HideArticle','id_post'); 
    } 

    public function group()
    {   
        return $this->belongsTo('App\Models\Groups','groupid'); 
    }


    public function video()
    {   
        return $this->hasOne('App\Models\PostVideo', 'id_post'); 
    }


    public function like_count(){
         return $this->likes()
            ->selectRaw('id_post, count(*) as aggregate')
            ->groupBy('id_post');
    }

    
}
