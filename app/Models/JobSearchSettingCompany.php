<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class JobSearchSettingCompany
 * @package App\Models
 * @version July 27, 2018, 4:10 am UTC
 *
 * @property integer jobsearchid
 * @property integer companyid
 */
class JobSearchSettingCompany extends Model
{
    use SoftDeletes;

    public $table = 'job_search_setting_companies';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'jobsearchid',
        'companyid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'jobsearchid' => 'integer',
        'companyid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function companyname()
    {
        return $this->belongsTo('App\Models\Company', 'companyid');
    }
    
}
