<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DurationJob
 * @package App\Models
 * @version July 10, 2018, 4:26 am UTC
 *
 * @property string name
 */
class DurationJob extends Model
{
    use SoftDeletes;

    public $table = 'duration_jobs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
