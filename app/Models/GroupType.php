<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class GroupType
 * @package App\Models
 * @version February 17, 2018, 8:47 am UTC
 *
 * @property string type_name
 */
class GroupType extends Model
{
    use SoftDeletes;

    public $table = 'group_types';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'type_name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'type_name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
