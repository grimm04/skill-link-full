<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ImageSurvey
 * @package App\Models
 * @version April 26, 2018, 5:17 pm UTC
 *
 * @property integer id_question
 * @property string image
 */
class ImageSurvey extends Model
{

    protected $primaryKey = 'id';

    public $table = 'image_surveys';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_question',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_question' => 'integer',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function getModelQuestion()
    {
      return $this->belongsTo('App\Models\Question', 'id_question');
    }

    
}
