<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';//指定数据库表
    protected $guarded=[];//黑名单
}
