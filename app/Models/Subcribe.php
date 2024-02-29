<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Subcribe
 * @package App\Models
 * @version March 6, 2018, 5:02 am UTC
 *
 * @property string fname
 * @property string email
 */
class Subcribe extends Model
{
    use SoftDeletes;

    public $table = 'subcribes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'fname',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fname' => 'string',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'email' => 'exit'
    ];

    
}
