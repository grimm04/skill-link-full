<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class JobRotation
 * @package App\Models
 * @version July 10, 2018, 4:20 am UTC
 *
 * @property string name
 */
class JobRotation extends Model
{
    use SoftDeletes;

    public $table = 'job_rotations';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
