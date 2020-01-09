<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){

        return test();
    }
}
