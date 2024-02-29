<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Education
 * @package App\Models
 * @version April 10, 2018, 4:56 am UTC
 *
 * @property integer userid
 * @property string institution
 * @property string major
 * @property string location
 * @property date form
 * @property date until
 */
class Education extends Model
{
    use SoftDeletes;

    public $table = 'education';
    

    protected $dates = ['deleted_at','until'];


    public $fillable = [
        'userid',
        'institution',
        'major',
        'location',
        'from',
        'until',
        'photo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'userid' => 'integer',
        'institution' => 'string',
        'major' => 'string',
        'location' => 'string',
        'form' => 'integer',
        'until' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [ 
    ];

    
}
