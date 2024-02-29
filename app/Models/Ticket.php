<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ticket
 * @package App\Models
 * @version April 10, 2018, 5:06 am UTC
 *
 * @property integer userid
 * @property string title
 * @property string institution
 * @property string location
 * @property integer ticket_number
 * @property date expiry_date
 */
class Ticket extends Model
{
    use SoftDeletes;

    public $table = 'tickets';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'userid',
        'photo',
        'title',
        'institution',
        'location',
        'ticket_number',
        'expiry_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'userid' => 'integer',
        'title' => 'string',
        'institution' => 'string',
        'photo' => 'string',
        'location' => 'string',
        'ticket_number' => 'integer',
        'expiry_date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
