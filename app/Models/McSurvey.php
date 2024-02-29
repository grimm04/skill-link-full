<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class McSurvey
 * @package App\Models
 * @version April 16, 2018, 6:10 am UTC
 *
 * @property integer id_question
 * @property string question
 */
class McSurvey extends Model
{

    protected $primaryKey = 'id';

    public $table = 'mc_surveys';
    

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

    public function getModelQuestion2()
    {
      return $this->belongsTo('App\Models\Question', 'id_question');
    }


    public function getModelMcAnswer()
    {
      return $this->hasMany('App\Models\McAnswer', 'id_mc');
    }

    
}
