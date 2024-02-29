<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class JobSearchSettingType
 * @package App\Models
 * @version August 1, 2018, 7:16 am UTC
 *
 * @property integer jobsearchid
 * @property integer typejob
 */
class JobSearchSettingType extends Model
{
    use SoftDeletes;

    public $table = 'job_search_setting_types';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'jobsearchid',
        'typejob'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'jobsearchid' => 'integer',
        'typejob' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

 
    
}
