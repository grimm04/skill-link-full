<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ReportArticle
 * @package App\Models
 * @version February 21, 2018, 9:31 am UTC
 *
 * @property integer userid
 * @property integer postid
 */
class ReportArticle extends Model
{
    use SoftDeletes;

    public $table = 'report_articles';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'userid',
        'postid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'userid' => 'integer',
        'postid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
