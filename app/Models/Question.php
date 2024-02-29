<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Question
 * @package App\Models
 * @version April 16, 2018, 5:59 am UTC
 *
 * @property integer id_survey
 * @property string title
 */
class Question extends Model
{

    protected $primaryKey = 'id';

    public $table = 'questions';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_survey',
        'title',
        'image',
        'sort'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_survey' => 'integer',
        'title' => 'string',
        'sort' => 'integer',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];


    public function getModelMcSurvey()
    {
      return $this->hasMany('App\Models\McSurvey', 'id_question');
    }

    public function getModelImageSurvey()
    {
      return $this->hasMany('App\Models\ImageSurvey', 'id_question');
    }

    public function getModelSurvey()
    {
      return $this->belongsTo('App\Models\Survey', 'id_survey');
    }
    
}
