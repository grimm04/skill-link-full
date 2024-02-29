<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FitDuty
 * @package App\Models
 * @version April 10, 2018, 5:10 am UTC
 *
 * @property integer dutyid
 * @property string titile
 * @property string description
 */
class FitDuty extends Model
{
    use SoftDeletes;

    public $table = 'fit_duties';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'dutyid',
        'titile',
        'description',
        'type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'dutyid' => 'integer',
        'titile' => 'string',
        'description' => 'string',
        'type' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
