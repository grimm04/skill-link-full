<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class JobPosition
 * @package App\Models
 * @version March 15, 2018, 7:20 pm UTC
 *
 * @property integer jobid
 * @property integer positionjobid
 */
class JobPosition extends Model
{
    use SoftDeletes;

    public $table = 'job_positions';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'jobid',
        'positionjobid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'jobid' => 'integer',
        'positionjobid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
