<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Endorsment
 * @package App\Models
 * @version April 10, 2018, 4:50 am UTC
 *
 * @property string name
 * @property string description
 */
class Endorsment extends Model
{
    use SoftDeletes;

    public $table = 'endorsments';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
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
