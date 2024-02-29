<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Employeendorsment
 * @package App\Models
 * @version April 10, 2018, 4:52 am UTC
 *
 * @property integer userid
 * @property integer endorsmentid
 */
class Employeendorsment extends Model
{
    use SoftDeletes;

    public $table = 'employeendorsments';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'userid',
        'endorsmentid',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'userid' => 'integer',
        'endorsmentid' => 'integer',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function endorsments() 
    {
        return $this->hasMany('App\Models\Endorsment','endorsmentid');
    }
}
