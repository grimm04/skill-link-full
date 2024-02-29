<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Conversation
 * @package App\Models
 * @version April 26, 2018, 10:50 am UTC
 *
 * @property integer userone
 * @property integer usertwo
 * @property string name
 */
class Conversation extends Model
{
    use SoftDeletes;

    public $table = 'conversations';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'userone',
        'usertwo',
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'userone' => 'integer',
        'usertwo' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function message()
    {   
        return $this->HasOne('App\Models\Message', 'conversationid'); 
    }

    public function messages()
    {   
        return $this->hasMany('App\Models\Message', 'conversationid'); 
    }

    public function one()
    {   
        return $this->belongsTo('App\Models\Employee', 'userone'); 
    }

    public function two()
    {   
        return $this->belongsTo('App\Models\Employee', 'usertwo'); 
    }

    
}
