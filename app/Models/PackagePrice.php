<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PackagePrice
 * @package App\Models
 * @version May 8, 2018, 5:01 am UTC
 *
 * @property integer id_package
 * @property integer id_package_detail
 * @property integer price
 * @property string status
 * @property integer item
 * @property string type
 */
class PackagePrice extends Model
{
    use SoftDeletes;

    public $table = 'package_prices';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_package',
        'id_package_detail',
        'price',
        'status',
        'item',
        'type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_package' => 'integer',
        'id_package_detail' => 'integer',
        'price' => 'integer',
        'status' => 'string',
        'item' => 'integer',
        'type' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
