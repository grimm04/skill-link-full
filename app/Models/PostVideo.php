<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PostVideo
 * @package App\Models
 * @version February 25, 2018, 4:41 pm UTC
 *
 * @property integer id_post
 * @property string video
 */
class PostVideo extends Model
{
    use SoftDeletes;

    public $table = 'post_videos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_post',
        'video'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_post' => 'integer',
        'video' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
