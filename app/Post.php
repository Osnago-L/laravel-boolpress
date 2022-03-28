<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ["posts_title","content","slug","category_id","img_upload"];

        public function category()
        {
            return $this->belongsTo('App\Category');
        }
        public function tags()
        {
            return $this->belongsToMany('App\Tag');
        }
}
