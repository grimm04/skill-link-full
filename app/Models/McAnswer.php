<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class McAnswer
 * @package App\Models
 * @version April 24, 2018, 5:50 am UTC
 *
 * @property integer id_user_survey
 * @property integer id_mc
 * @property string answer
 */
class McAnswer extends Model
{

    protected $primaryKey = 'id';

    public $table = 'mc_answers';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_user_survey',
        'id_mc',
        'answer'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_user_survey' => 'integer',
        'id_mc' => 'integer',
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
