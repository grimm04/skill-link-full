<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TypeCompany
 * @package App\Models
 * @version March 15, 2018, 4:06 pm UTC
 *
 * @property string name
 */
class TypeCompany extends Model
{
    use SoftDeletes;

    public $table = 'type_companies';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
