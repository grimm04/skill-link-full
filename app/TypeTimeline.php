<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeTimeline extends Model
{
    public $table = 'type_timelines';
    

    // protected $dates = ['deleted_at'];


    public $fillable = [
        'id',
        'type',
        'description',
        'create_date',
        'delete_date',
        'color'
    ];
}
