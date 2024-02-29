<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MessageGroup
 * @package App\Models
 * @version April 30, 2018, 9:06 am UTC
 *
 * @property integer groupid
 * @property integer userid
 * @property string msg
 * @property integer status
 * @property string images
 */
class MessageGroup extends Model
{
    use SoftDeletes;

    public $table = 'message_groups';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'groupid',
        'userid',
        'msg',
        'status',
        'images'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'groupid' => 'integer',
        'userid' => 'integer',
        'msg' => 'string',
        'status' => 'integer',
        'images' => 'string'
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
        return $this->belongsTo('App\Models\Employee', 'userid'); 
    }
}
