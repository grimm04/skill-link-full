<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Gender
 * @package App\Models
 * @version December 26, 2017, 8:15 am UTC
 *
 * @property string name
 * @property string descriprion
 */
class Gender extends Model
{
    use SoftDeletes;

    public $table = 'genders';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'descriprion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'descriprion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    
}
