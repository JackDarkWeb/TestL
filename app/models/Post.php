<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    public $timestamps = true;
    protected $fillable = [
        "title",
        "content",
        "contents",
    ];

    public function getFormattedDateAttribute(){
        return $this->created_at->format("d/m/Y à H:i");
    }
    public function getShortContentAttribute(){
        return Str::limit($this->content, 140);
    }
    public function getSlugTitleAttribute(){
        return Str::slug($this->title);
    }

}
