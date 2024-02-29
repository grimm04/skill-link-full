<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PackageAnswer
 * @package App\Models
 * @version May 8, 2018, 4:46 am UTC
 *
 * @property integer id_user_survey
 * @property string answer
 */
class PackageAnswer extends Model
{
    use SoftDeletes;

    public $table = 'package_answers';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_user_survey',
        'answer'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_user_survey' => 'integer',
        'answer' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
