<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class JobSearchSettingTitle
 * @package App\Models
 * @version July 27, 2018, 3:54 am UTC
 *
 * @property integer jobsearchid
 * @property integer chtradeid
 */
class JobSearchSettingTitle extends Model
{
    use SoftDeletes;

    public $table = 'job_search_setting_titles';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'jobsearchid',
        'chtradeid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'jobsearchid' => 'integer',
        'chtradeid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function chtrade()
    {
        return $this->belongsTo('App\Models\ChildTrade','chtradeid');
    }
}
