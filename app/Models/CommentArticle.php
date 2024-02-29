<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CommentArticle
 * @package App\Models
 * @version February 14, 2018, 1:51 pm UTC
 *
 * @property string comment
 * @property integer id_post
 * @property integer id_user
 */
class CommentArticle extends Model
{
    use SoftDeletes;

    public $table = 'comment_articles';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'comment',
        'id_post',
        'id_user'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'comment' => 'string',
        'id_post' => 'integer',
        'id_user' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'comment' => 'required'
    ];


    public function users()
    {   
        return $this->belongsTo('App\Employees', 'id_user'); 
    }

     public function posts()
    {
        $this->belongsTo('App\Models\PostArticle','id_user');
    }
    
}
