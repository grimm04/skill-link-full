<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ConversationRecruit
 * @package App\Models
 * @version July 12, 2018, 4:26 am UTC
 *
 * @property integer useradmin
 * @property integer useremployee
 * @property string name
 */
class ConversationRecruit extends Model
{
    use SoftDeletes;

    public $table = 'conversation_recruits';
    

    protected $dates = ['deleted_at'];


    public $fillable = [ 
        'useradmin',
        'useremployee',
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'useradmin' => 'integer',
        'useremployee' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    // public function message()
    // {   
    //     return $this->HasOne('App\Models\MessageRecruit', 'conversationid'); 
    // }

    public function messages()
    {   
        return $this->hasMany('App\Models\MessageRecruit', 'conversationid'); 
    }

    public function one()
    {   
        return $this->belongsTo('App\User', 'useradmin'); 
    }

    public function two()
    {   
        return $this->belongsTo('App\Models\Employee', 'useremployee'); 
    }

    
}
