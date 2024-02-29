<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Company
 * @package App\Models
 * @version March 15, 2018, 4:47 pm UTC
 *
 * @property string name
 * @property integer headquarter
 * @property integer company_size
 * @property string website
 * @property date founded
 * @property string email
 * @property string fb
 * @property string ig
 * @property string twitter
 * @property string yt
 * @property string avatar
 * @property integer location
 * @property integer typecompanyid
 * @property integer status
 */
class Company extends Model
{
    use SoftDeletes;

    public $table = 'companies';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'headquarter',
        'company_size',
        'website',
        'founded',
        'email',
        'fb',
        'ig',
        'twitter',
        'yt',
        'avatar',
        'location',
        'typecompanyid',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'headquarter' => 'integer',
        'company_size' => 'integer',
        'website' => 'string',
        'founded' => 'date',
        'email' => 'string',
        'fb' => 'string',
        'ig' => 'string',
        'twitter' => 'string',
        'yt' => 'string',
        'avatar' => 'string',
        'location' => 'integer',
        'typecompanyid' => 'integer',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];


    public function headquarters()
    {   
        return $this->belongsTo('App\Models\Province', 'headquarter'); 
    }

    public function locations()
    {   
        return $this->belongsTo('App\Models\Province', 'location'); 
    }

    public function typecompany() 
    {   
        return $this->belongsTo('App\Models\TypeCompany', 'typecompanyid'); 
    }
 
    public function companyindustry()
    {   
        return $this->hasMany('App\Models\CompanyIndustry', 'companyid'); 
    }

    public function companyspeciality()
    {   
        return $this->hasMany('App\Models\CompanySpeciality', 'companyid'); 
    }


    
}
