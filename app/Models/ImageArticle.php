<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ImageArticle
 * @package App\Models
 * @version February 14, 2018, 1:45 pm UTC
 *
 * @property integer id_post
 * @property string image
 * @property string thumbnail
 */
class ImageArticle extends Model
{
    use SoftDeletes;

    public $table = 'image_articles';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_post',
        'image',
        'thumbnail'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_post' => 'integer',
        'image' => 'string',
        'thumbnail' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
