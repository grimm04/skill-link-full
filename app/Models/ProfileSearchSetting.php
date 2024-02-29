<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProfileSearchSetting
 * @package App\Models
 * @version July 27, 2018, 3:21 am UTC
 *
 * @property integer userid
 * @property integer interst
 * @property integer location
 * @property  company
 * @property integer industries
 * @property integer school
 */
class ProfileSearchSetting extends Model
{
    use SoftDeletes;

    public $table = 'profile_search_settings';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'userid',
        'interest',
        'location',
        'company',
        'industries',
        'school'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'userid' => 'integer',
        'interest' => 'integer',
        'location' => 'integer',
        'industries' => 'integer',
        'school' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
