<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id', 
        'category_id', 
        'subject', 
        'author', 
        'created_at',
        'body'
    ];
}
