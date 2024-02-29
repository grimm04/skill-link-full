<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MessageRecruit
 * @package App\Models
 * @version July 12, 2018, 4:48 am UTC
 *
 * @property integer userfrom
 * @property integer userto
 * @property integer conversationid
 * @property string msg
 * @property string images
 * @property integer status
 */
class MessageRecruit extends Model
{
    use SoftDeletes;

    public $table = 'message_recruits';
    

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

    public function userfrom()
    {   
        return $this->belongsTo('App\User', 'userfrom'); 
    }

    public function userto()
    {   
        return $this->belongsTo('App\Models\Employee', 'userto'); 
    }


    public function userone()
    {   
        return $this->belongsTo('App\User', 'userfrom'); 
    }

    public function employeeone()
    {   
        return $this->belongsTo('App\Models\Employee', 'userfrom'); 
    }

    public function usertwo()
    {   
        return $this->belongsTo('App\User', 'userto'); 
    }

    public function employeetwo()
    {   
        return $this->belongsTo('App\Models\Employee', 'userto'); 
    }


    
}
