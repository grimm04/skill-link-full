<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Package
 * @package App\Models
 * @version May 8, 2018, 3:51 am UTC
 *
 * @property string name
 * @property string description
 * @property integer sort
 */
class Package extends Model
{
    use SoftDeletes;

    public $table = 'packages';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'description',
        'sort'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'sort' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
