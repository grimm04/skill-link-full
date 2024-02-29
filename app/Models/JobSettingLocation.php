<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class JobSettingLocation
 * @package App\Models
 * @version March 16, 2018, 11:23 am UTC
 *
 * @property integer jobsettingid
 * @property integer locationid
 */
class JobSettingLocation extends Model
{
    use SoftDeletes;

    public $table = 'job_setting_locations';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'jobsettingid',
        'locationid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'jobsettingid' => 'integer',
        'locationid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
    public function locations()
    {   
        return $this->belongsTo('App\Models\Province', 'locationid'); 
    }
}
