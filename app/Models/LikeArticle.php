<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class LikeArticle
 * @package App\Models
 * @version February 14, 2018, 1:53 pm UTC
 *
 * @property integer id_post
 * @property integer id_user
 */
class LikeArticle extends Model
{
    use SoftDeletes;

    public $table = 'like_articles';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id',
        'id_post',
        'id_user',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_post' => 'integer',
        'id_user' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ]; 
    

    public function user()
    {   
         return $this->belongsTo('App\Employees', 'id_user'); 
    }
}
