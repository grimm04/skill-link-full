<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Timeline
 * @package App\Models
 * @version April 10, 2018, 5:01 am UTC
 *
 * @property integer userid
 * @property integer jobid
 * @property string type
 * @property date start_date
 * @property date end_date
 */
class Timeline extends Model
{
    use SoftDeletes;

    public $table = 'timelines';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'userid',
        'jobid',
        'type',
        'photo',
        'start_date',
        'end_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'userid' => 'integer',
        'jobid' => 'integer',
        'type' => 'string',
        'start_date' => 'date',
        'end_date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

     public function job() 
    {
        return $this->belongsTo('App\Models\Job','jobid');
    }

     public function typetimeline() 
    {
        return $this->belongsTo('App\TypeTimeline','type');
    }
}
