<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class HideArticle
 * @package App\Models
 * @version February 14, 2018, 1:55 pm UTC
 *
 * @property integer id_post
 * @property integer id_user
 */
class HideArticle extends Model
{
    use SoftDeletes;

    public $table = 'hide_articles';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_post',
        'id_user'
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

    
}
