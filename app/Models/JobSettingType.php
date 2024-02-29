<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class JobSettingType
 * @package App\Models
 * @version March 16, 2018, 11:23 am UTC
 *
 * @property integer jobsettingid
 * @property integer typejobid
 */
class JobSettingType extends Model
{
    use SoftDeletes;

    public $table = 'job_setting_types';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'jobsettingid',
        'typejobid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'jobsettingid' => 'integer',
        'typejobid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function typejob() 
    {   
        return $this->belongsTo('App\Models\TypeJob', 'typejobid'); 
    }
    
}
