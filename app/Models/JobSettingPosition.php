<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class JobSettingPosition
 * @package App\Models
 * @version March 16, 2018, 11:22 am UTC
 *
 * @property integer jobsettingid
 * @property integer positionjobid
 */
class JobSettingPosition extends Model
{
    use SoftDeletes;

    public $table = 'job_setting_positions';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'jobsettingid',
        'positionjobid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'jobsettingid' => 'integer',
        'positionjobid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];


    public function position()
    {   
        return $this->belongsTo('App\Models\ChildTrade', 'positionjobid'); 
    }
    
}
