<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class JobSettingUser
 * @package App\Models
 * @version March 16, 2018, 11:20 am UTC
 *
 * @property integer userid
 * @property integer employmentstatusid
 * @property integer jobrelocate
 * @property integer status
 */
class JobSettingUser extends Model
{
    use SoftDeletes;

    public $table = 'job_setting_users';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'userid',
        'employmentstatusid',
        'jobrelocate',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'userid' => 'integer',
        'employmentstatusid' => 'integer',
        'jobrelocate' => 'integer',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function employmentstatus()
    {   
        return $this->belongsTo('App\Models\EmploymentStatus', 'employmentstatusid'); 
    }

    public function jobsettingtype()
    {   
        return $this->hasMany('App\Models\JobSettingType', 'jobsettingid'); 
    }

    public function jobsettingposition()
    {   
        return $this->hasMany('App\Models\JobSettingPosition', 'jobsettingid'); 
    }

    public function jobsettinglocation()
    {   
        return $this->hasMany('App\Models\JobSettingLocation', 'jobsettingid'); 
    }
}
