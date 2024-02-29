<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagePost extends Model
{
    public $table = 'image_articel';
    

    // protected $dates = ['deleted_at'];


    public $fillable = [
        'id',
        'id_post',
        'image',
        'thumbnail'
    ];
}
