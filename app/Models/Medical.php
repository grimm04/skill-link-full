<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Medical
 * @package App\Models
 * @version April 10, 2018, 5:07 am UTC
 *
 * @property string condition
 * @property integer level
 * @property string|\Carbon\Carbon form
 */
class Medical extends Model
{
    use SoftDeletes;

    public $table = 'medicals';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'condition',
        'userid',
        'level',
        'form'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'condition' => 'string',
        'level' => 'integer',
        'userid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
