<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class GroupLevels
 * @package App\Models
 * @version February 17, 2018, 2:54 am UTC
 *
 * @property string level_name
 */
class GroupLevels extends Model
{
    use SoftDeletes;

    public $table = 'group_levels';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'level_name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'level_name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'level_name' => 'required'
    ];

    
}
