<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Survey
 * @package App\Models
 * @version April 16, 2018, 5:51 am UTC
 *
 * @property string name
 * @property string title
 */
class Survey extends Model
{

    protected $primaryKey = 'id';

    public $table = 'surveys';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'sort'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'sort' => 'integer'
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
      return $this->hasMany('App\Models\Question', 'id_survey');
    }

    public function getModelEssayQuestion()
    {
      return $this->hasMany('App\Models\EssayQuestion', 'id_survey');
    }

    
}
