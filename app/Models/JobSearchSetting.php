<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class JobSearchSetting
 * @package App\Models
 * @version July 27, 2018, 3:41 am UTC
 *
 * @property integer userid
 * @property integer postedtimeid
 * @property integer typejobid
 */
class JobSearchSetting extends Model
{
    use SoftDeletes;

    public $table = 'job_search_settings';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'userid',
        'postedtimeid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'userid' => 'integer',
        'postedtimeid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];


    public function tittles()
    {
        return $this->hasMany('App\Models\JobSearchSettingTitle', 'jobsearchid');
    } 

    public function location()
    {
        return $this->hasMany('App\Models\JobSearchSettingLocation', 'jobsearchid');
    }

    public function company()
    {
        return $this->hasMany('App\Models\JobSearchSettingCompany', 'jobsearchid');
    }

    public function posted()
    {
        return $this->belongsTo('App\Models\PostedTime', 'postedtimeid');
    }
 
    public function typejob()
    {
        return $this->hasMany('App\Models\JobSearchSettingType', 'jobsearchid');
    }

    
}
