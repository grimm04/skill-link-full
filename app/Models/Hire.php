<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Hire
 * @package App\Models
 * @version July 31, 2018, 8:12 am UTC
 *
 * @property integer employeeid
 * @property integer companyid
 * @property integer childtradeid
 */
class Hire extends Model
{
    use SoftDeletes;

    public $table = 'hires';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'employeeid',
        'companyid',
        'childtradeid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'employeeid' => 'integer',
        'companyid' => 'integer',
        'childtradeid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
