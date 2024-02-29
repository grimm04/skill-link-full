<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PackageDetail
 * @package App\Models
 * @version May 8, 2018, 4:56 am UTC
 *
 * @property integer id_package
 * @property string description
 */
class PackageDetail extends Model
{
    use SoftDeletes;

    public $table = 'package_details';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_package',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_package' => 'integer',
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
