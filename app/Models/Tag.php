<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded =[];

    //多对多，标签拥有多篇文章
    public function articles(){
        return $this->belongsToMany('App\Models\Article','article_tags','tag_id','article_id');
    }
}
