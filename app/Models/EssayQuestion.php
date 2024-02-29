<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EssayQuestion
 * @package App\Models
 * @version April 24, 2018, 5:55 am UTC
 *
 * @property integer id_survey
 * @property string question
 */
class EssayQuestion extends Model
{

    protected $primaryKey = 'id';

    public $table = 'essay_questions';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_survey',
        'question',
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
        'question' => 'string',
        'image' => 'string',
        'sort' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function getModelSurvey()
    {
      return $this->belongsTo('App\Models\Survey', 'id_survey');
    }

    
}
