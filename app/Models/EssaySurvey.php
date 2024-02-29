<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EssaySurvey
 * @package App\Models
 * @version April 16, 2018, 6:09 am UTC
 *
 * @property integer id_question
 * @property string question
 */
class EssaySurvey extends Model
{

    protected $primaryKey = 'id';

    public $table = 'essay_surveys';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_question',
        'question'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_question' => 'integer',
        'question' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
