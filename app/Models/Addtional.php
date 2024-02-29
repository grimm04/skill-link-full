<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Addtional
 * @package App\Models
 * @version April 10, 2018, 5:14 am UTC
 *
 * @property integer userid
 * @property integer userid
 * @property integer interestid
 */
class Addtional extends Model
{
    use SoftDeletes;

    public $table = 'addtionals';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'userid',
        'userid',
        'interestid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'userid' => 'integer',
        'userid' => 'integer',
        'interestid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
