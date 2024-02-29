<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EssayAnswer
 * @package App\Models
 * @version April 24, 2018, 6:00 am UTC
 *
 * @property integer id_user_survey
 * @property integer id_essay
 * @property string answer
 */
class EssayAnswer extends Model
{
    use SoftDeletes;

    public $table = 'essay_answers';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_user_survey',
        'id_essay',
        'answer'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_user_survey' => 'integer',
        'id_essay' => 'integer',
        'answer' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function getModelEssayQuestion()
    {
      return $this->belongsTo('App\Models\EssayQuestion', 'id_essay');
    }

    public function getModelUserSurvey()
    {
      return $this->belongsTo('App\Models\UserSurvey', 'id_user_survey');
    }

    
}
