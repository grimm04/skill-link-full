<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Groups
 * @package App\Models
 * @version February 17, 2018, 8:51 am UTC
 *
 * @property string group_name
 * @property string ref_number
 * @property string location
 * @property string group_info
 * @property string group_image
 * @property string website
 * @property integer company_size
 * @property integer group_type_id
 * @property integer userid
 */
class Groups extends Model
{
    use SoftDeletes;

    public $table = 'groups';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'group_name',
        'ref_number',
        'location',
        'group_info',
        'group_image',
        'website',
        'company_size',
        'group_type_id',
        'userid',
        'create_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'group_name' => 'string',
        'ref_number' => 'string',
        'location' => 'string',
        'group_info' => 'string',
        'group_image' => 'string',
        'website' => 'string',
        'company_size' => 'integer',
        'group_type_id' => 'integer',
        'userid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'group_name' => 'required'
    ];


    public function type()
    {   
        return $this->belongsTo('App\Models\GroupType', 'group_type_id'); 
    }

    public function user()
    {   
        return $this->belongsTo('App\Employees', 'userid'); 
    }

    public function member()
    {   
        return $this->hasMany('App\Models\GroupMember', 'groupid'); 
    }

    public function messages()
    {   
        return $this->hasMany('App\Models\MessageGroup', 'groupid'); 
    }
    
}
