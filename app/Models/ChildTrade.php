<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ChildTrade
 * @package App\Models
 * @version December 26, 2017, 8:06 am UTC
 *
 * @property string name
 * @property string descriprion
 * @property integer tradeid
 */
class ChildTrade extends Model
{
    use SoftDeletes;

    public $table = 'child_trades';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'descriprion',
        'tradeid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'descriprion' => 'string',
        'tradeid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'descriprion' => 'required'
    ];


    public function trade() 
    {
        return $this->belongsTo('App\Models\Trade','tradeid');
    }
    
    
}
