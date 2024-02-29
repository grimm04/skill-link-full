<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Certificate
 * @package App\Models
 * @version April 10, 2018, 4:55 am UTC
 *
 * @property integer userid
 * @property string title
 * @property string photo
 * @property string institution
 * @property string location
 * @property date expiry_date
 */
class Certificate extends Model
{
    use SoftDeletes;

    public $table = 'certificates';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'userid',
        'title',
        'photo',
        'institution',
        'location',
        'expiry_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'userid' => 'integer',
        'title' => 'string',
        'photo' => 'string',
        'institution' => 'string',
        'location' => 'string',
        'expiry_date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'photo' => 'required',
        'institution' => 'required',
        'location' => 'required'
    ];

    
}
