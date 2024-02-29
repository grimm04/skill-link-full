<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class JobSkill
 * @package App\Models
 * @version March 18, 2018, 3:56 pm UTC
 *
 * @property integer jobid
 * @property integer skillneedid
 */
class JobSkill extends Model
{
    use SoftDeletes;

    public $table = 'job_skills';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'jobid',
        'skillneedid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'jobid' => 'integer',
        'skillneedid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function skill()
    {   
        return $this->belongsTo('App\Models\SkillNeed', 'skillneedid'); 
    }

    
}
