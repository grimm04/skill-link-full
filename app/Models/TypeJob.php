<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TypeJob
 * @package App\Models
 * @version March 15, 2018, 6:42 pm UTC
 *
 * @property string name
 * @property string description
 */
class TypeJob extends Model
{
    use SoftDeletes;

    public $table = 'type_jobs';
    

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
