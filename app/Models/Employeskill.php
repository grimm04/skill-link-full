<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Employeskill
 * @package App\Models
 * @version April 10, 2018, 4:50 am UTC
 *
 * @property integer userid
 * @property integer levelid
 */
class Employeskill extends Model
{
    use SoftDeletes;

    public $table = 'employeskills';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'userid',
        'name',
        'levelid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'userid' => 'integer',
        'name' => 'string',
        'levelid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];


    public function level() 
    {
        return $this->belongsTo('App\Models\Level','levelid');
    }
    
}
