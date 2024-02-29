<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SkillNeed
 * @package App\Models
 * @version March 15, 2018, 6:36 pm UTC
 *
 * @property string name
 * @property string description
 */
class SkillNeed extends Model
{
    use SoftDeletes;

    public $table = 'skill_needs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    
}
