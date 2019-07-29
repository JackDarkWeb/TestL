<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = true;
    protected $fillable = [
        "title",
        "content",
        "contents",
    ];


}
