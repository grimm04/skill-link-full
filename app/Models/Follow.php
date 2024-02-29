<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Follow
 * @package App\Models
 * @version February 19, 2018, 1:43 pm UTC
 *
 * @property integer userid
 * @property integer followid
 */
class Follow extends Model
{
    use SoftDeletes;

    public $table = 'follows';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'userid',
        'followid',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'userid' => 'integer',
        'followid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'followid' => 'required'
    ];


    public function usersfollow()
    {   
        return $this->belongsTo('App\Employees', 'followid'); 
    }

    public function usersfollower()
    {   
        return $this->belongsTo('App\Employees', 'userid'); 
    }
    
}
