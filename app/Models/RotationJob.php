<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RotationJob
 * @package App\Models
 * @version July 10, 2018, 4:29 am UTC
 *
 * @property string name
 */
class RotationJob extends Model
{
    use SoftDeletes;

    public $table = 'rotation_jobs';
    

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
