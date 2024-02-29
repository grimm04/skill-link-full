<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewProfile extends Model
{
    public $table = 'visitor';
    

    // protected $dates = ['deleted_at'];


    public $fillable = [
        'userid',
        'visitid'
    ];

    public function usersvisited()
    {   
        return $this->belongsTo('App\Employees', 'userid'); 
    }

}
