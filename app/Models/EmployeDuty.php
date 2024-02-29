<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EmployeDuty
 * @package App\Models
 * @version April 10, 2018, 5:11 am UTC
 *
 * @property integer fitdutyid
 * @property integer userid
 */
class EmployeDuty extends Model
{
    use SoftDeletes;

    public $table = 'employe_duties';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'fitdutyid',
        'userid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fitdutyid' => 'integer',
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
