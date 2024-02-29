<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CompanyIndustry
 * @package App\Models
 * @version March 15, 2018, 6:18 pm UTC
 *
 * @property integer companyid
 * @property integer industryid
 */
class CompanyIndustry extends Model
{
    use SoftDeletes;

    public $table = 'company_industries';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'companyid',
        'industryid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'companyid' => 'integer',
        'industryid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
 
    public function industry()
    {   
        return $this->belongsTo('App\Models\Industry', 'industryid'); 
    }
    
}
