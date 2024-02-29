<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class JobType
 * @package App\Models
 * @version March 15, 2018, 7:20 pm UTC
 *
 * @property integer jobid
 * @property integer typejobid
 */
class JobType extends Model
{
    use SoftDeletes;

    public $table = 'job_types';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'jobid',
        'typejobid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'jobid' => 'integer',
        'typejobid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function type()
    {   
        return $this->belongsTo('App\Models\TypeJob', 'typejobid'); 
    }
}
