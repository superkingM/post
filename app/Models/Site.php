<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $guarded =[];
    public $timestamps =false;


    //调用站点信息

    public static function getSite(){
        return self::first();
    }
}
