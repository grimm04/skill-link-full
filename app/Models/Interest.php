<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Interest
 * @package App\Models
 * @version April 10, 2018, 5:08 am UTC
 *
 * @property string name
 * @property string description
 */
class Interest extends Model
{
    use SoftDeletes;

    public $table = 'interests';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'userid',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'userid' => 'integer',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
