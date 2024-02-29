<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Province
 * @package App\Models
 * @version December 27, 2017, 6:45 am UTC
 *
 * @property string name
 * @property string country
 * @property string abbreviation
 * @property string type
 * @property integer sort
 */
class Province extends Model
{
    use SoftDeletes;

    public $table = 'provinces';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'country',
        'abbreviation',
        'type',
        'sort'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'country' => 'string',
        'abbreviation' => 'string',
        'type' => 'string',
        'sort' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'country' => 'required',
        'abbreviation' => 'required',
        'sort' => 'required'
    ];

    
}
