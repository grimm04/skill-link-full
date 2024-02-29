<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Level
 * @package App\Models
 * @version December 26, 2017, 8:12 am UTC
 *
 * @property string name
 * @property string descriprion
 */
class Level extends Model
{
    use SoftDeletes;

    public $table = 'levels';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'descriprion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'descriprion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    public function level()
    {   
        return $this->hasMany('App\Models\Employee', 'levelid'); 
    }

    
}
