<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UserSurvey
 * @package App\Models
 * @version April 24, 2018, 5:46 am UTC
 *
 * @property string email
 */
class UserSurvey extends Model
{

    protected $primaryKey = 'id';

    public $table = 'user_surveys';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'email',
        'name',
        'company',
        'company_size',
        'job_title'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'email' => 'string',
        'name' => 'string',
        'company' => 'string',
        'company_size' => 'string',
        'job_title' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
