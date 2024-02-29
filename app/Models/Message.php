<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Message
 * @package App\Models
 * @version April 26, 2018, 5:15 pm UTC
 *
 * @property integer userfrom
 * @property integer userto
 * @property integer conversationid
 * @property string msg
 * @property integer status
 */
class Message extends Model
{
    use SoftDeletes;

    public $table = 'messages';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'userfrom',
        'userto',
        'conversationid',
        'msg',
        'images',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'userfrom' => 'integer',
        'userto' => 'integer',
        'conversationid' => 'integer',
        'msg' => 'string',
        'images' => 'string',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function userone()
    {   
        return $this->belongsTo('App\Models\Employee', 'userfrom'); 
    }

    public function usertwo()
    {   
        return $this->belongsTo('App\Models\Employee', 'userto'); 
    }

    
}
