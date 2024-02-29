<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Experience
 * @package App\Models
 * @version April 10, 2018, 4:41 am UTC
 *
 * @property integer userid
 * @property string company
 * @property string title
 * @property integer locationid
 * @property date start_date
 * @property string present
 * @property integer work_status
 * @property string description
 */
class Experience extends Model
{
    use SoftDeletes;

    public $table = 'experiences';
    

    protected $dates = ['deleted_at','start_date','end_date'];


    public $fillable = [
        'userid',
        'company',
        'title',
        'location',
        'start_date',
        'end_date',
        'present',
        'work_status',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'userid' => 'integer',
        'company' => 'string',
        'title' => 'string',
        'location' => 'string',
        'start_date' => 'date',
        'end_date' => 'date',
        'present' => 'string',
        'work_status' => 'integer',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];


    //  public function province()
    // {
    //     return $this->belongsTo('App\Models\province', 'locationid');
    // }
    
}
