<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded =[];

    //一对一，文章属于分类
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
    //多对多，文章有多个标签
    public function tags(){
        return $this->belongsToMany('App\Models\Tag','article_tags','article_id','tag_id');
    }
}
