<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class JobSearchSettingLocation
 * @package App\Models
 * @version July 27, 2018, 4:07 am UTC
 *
 * @property integer jobsearchid
 * @property integer locationid
 */
class JobSearchSettingLocation extends Model
{
    use SoftDeletes;

    public $table = 'job_search_setting_locations';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'jobsearchid',
        'locationid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'jobsearchid' => 'integer',
        'locationid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function province()
    {
        return $this->belongsTo('App\Models\Province', 'locationid');
    }
}
