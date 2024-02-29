<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class JobApplyUser
 * @package App\Models
 * @version March 16, 2018, 10:36 am UTC
 *
 * @property integer userid
 * @property integer jobid
 * @property integer status
 */
class JobApplyUser extends Model
{
    use SoftDeletes;

    public $table = 'job_apply_users';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'userid',
        'jobid',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'userid' => 'integer',
        'jobid' => 'integer',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

     public function job()
    {   
        return $this->belongsTo('App\Models\Job', 'userid'); 
    }

    
}
