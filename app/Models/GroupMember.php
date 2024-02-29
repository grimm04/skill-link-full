<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class GroupMember
 * @package App\Models
 * @version February 17, 2018, 8:54 am UTC
 *
 * @property integer groupid
 * @property integer userid
 * @property integer levelid
 */
class GroupMember extends Model
{
    use SoftDeletes;

    public $table = 'group_members';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'groupid',
        'userid',
        'levelid',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'groupid' => 'integer',
        'userid' => 'integer',
        'levelid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function users()
    {   
        return $this->belongsTo('App\Employees', 'userid'); 
    }

    public function groups()
    {   
        return $this->belongsTo('App\Models\Groups', 'groupid'); 
    }

    public function level()
    {   
        return $this->belongsTo('App\Models\GroupLevels', 'levelid'); 
    }


    public function memberg() 
    {
        return $this->belongsToMany('App\Employees')
                    ->withTimestamps();

        // return $this->belongsToMany('App\Employees', 'userid'); 
    }

}
