<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostArticle extends Model
{
    public $table = 'post_articel';
    

    // protected $dates = ['deleted_at'];


    public $fillable = [
        'id',
        'title',
        'post',
        'create_date',
        'delete_date',
        'id_user',
        'view',
        'status',
    ];
}
