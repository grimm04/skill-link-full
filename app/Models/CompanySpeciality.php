<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CompanySpeciality
 * @package App\Models
 * @version March 15, 2018, 6:08 pm UTC
 *
 * @property integer companyid
 * @property integer specialityid
 */
class CompanySpeciality extends Model
{
    use SoftDeletes;

    public $table = 'company_specialities';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'companyid',
        'specialityid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'companyid' => 'integer',
        'specialityid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
    public function speciality()
    {   
        return $this->belongsTo('App\Models\Speciality', 'specialityid'); 
    }
    
}
