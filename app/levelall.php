<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class levelall extends Model
{
    public $table = 'levelalls';
    

    // protected $dates = ['deleted_at'];


    public $fillable = [
        'id',
        'name', 
        'create_date',
        'delete_date'
    ];
}
