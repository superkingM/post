<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Site;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        view()->share(
            [
                'categories' => Category::all(),
                'site' => Site::getSite()
            ]
        );
    }

    //首页
    public function index()
    {
        $articles = Article::with('category', 'tags')->orderBy('id', 'desc')->paginate(12);
        return view('home.index', compact('articles'));
    }

    //分类页

    public function category($id)
    {

        $articles = Article::where('category_id', $id)->orderBy('id', 'desc')->paginate(12);

        return view('home.category', compact('articles'));
    }

    //详细页

    public function show($id)
    {
        $article = Article::with('category', 'tags')->find($id);
        //上一篇
        $upid = Article::where('id', '<', $id)->max('id');
        if (empty($upid)) {
            $upid = $id;
        }
        $articleup = Article::find($upid);
        //下一篇
        $downid = Article::where('id', '>', $id)->min('id');
        if (empty($downid)) {
            $downid = $id;
        }
        $articledown = Article::find($downid);
        //按照本文分类推荐8条
//        $post2 = Article::where('category_id', $category_id)->orderBy(\DB::raw('RAND()'))->take(8)->get();
        $post2 = Article::orderBy(\DB::raw('RAND()'))->take(8)->get(); //如果此分类没有8条随机推荐8条
        return view('home.show', compact('article', 'articledown', 'articleup', 'post2'));
    }
}
