<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Duty
 * @package App\Models
 * @version April 10, 2018, 5:08 am UTC
 *
 * @property string title
 * @property string description
 */
class Duty extends Model
{
    use SoftDeletes;

    public $table = 'duties';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function fit()
    {
        return $this->hasMany('App\Models\FitDuty', 'dutyid');
    } 
    
}
