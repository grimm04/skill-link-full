<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Job
 * @package App\Models
 * @version March 15, 2018, 7:10 pm UTC
 *
 * @property string name
 * @property integer companyid
 * @property integer userid
 * @property string description
 * @property integer relocate
 * @property integer employmentstatusid
 * @property integer status
 */
class Job extends Model
{
    use SoftDeletes;

    public $table = 'jobs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'companyid',
        'userid', 
        'image', 
        'description',
        'relocate',
        'employmentstatusid',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'companyid' => 'integer',
        'userid' => 'integer',
        'description' => 'string',
        'image' => 'string',
        'relocate' => 'integer',
        'employmentstatusid' => 'integer',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];


    public function position()
    {   
        return $this->hasMany('App\Models\JobPosition', 'jobid'); 
    }
    
    public function company()
    {   
        return $this->belongsTo('App\Models\Company', 'companyid'); 
    }

    public function skill()
    {   
        return $this->hasMany('App\Models\JobSkill', 'jobid'); 
    }
 
    public function typejob()
    {   
        return $this->hasMany('App\Models\JobType', 'jobid'); 
    }
 
    
}
