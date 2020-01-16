<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleValidate;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function __construct()
    {
        view()->share([
            '_article' => 'active',
            'categories' => Category::all()
        ]);

    }

    /**
     * 首页
     */
    public function index(Request $request)
    {
        $where = function ($query) use ($request) {
            if ($request->has('title') and $request->title != '') {
                $search = "%" . $request->title . "%";
                $query->where('title', 'like', $search);
            }
            if ($request->has('category_id') and $request->category_id != -1) {
                $query->where('category_id', $request->category_id);
            }

        };

        $articles = Article::with('category')->where($where)->orderBy('id', 'desc')->paginate(12)->appends($request->all());
        return view('admin.article.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.article.create');
    }

    //新增
    public function store(ArticleValidate $request)
    {
        $tag_ids = [];
        $from_tags = strsToArray($request->keywords);
        $table_tags = Tag::whereIn('name', $from_tags)->get();

        if (count($table_tags) == count($from_tags)) {
            $tag_ids = $table_tags->pluck('id')->toArray();
        } else {
            $tag_ids = $table_tags->pluck('id')->toArray();
            $tag_name = $table_tags->pluck('name')->toArray();
            $new_tag = array_diff($from_tags, $tag_name);
            foreach ($new_tag as $value) {
                $tag = Tag::create(['name' => $value]);
                array_push($tag_ids, $tag->id);
            }
        }
    $data = [
        'title'=>$request->title,
        'category_id'=>$request->category_id,
        'image'=>$request->image,
        'content'=>$request->content,
        'description'=>$request->description,
        'markdown_html_code'=>$request->markdown_html_code,
        'status'=>1,
        'view'=>1,
        'sort'=>1
    ];
    $article = Article::create($data);
    $article->tags()->sync($tag_ids);

    return redirect(route('article.index'));








    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::with('tags')->find($id);
        return view('admin.article.edit',compact('article'));
    }

    /**
     * 更新
     */
    public function update(ArticleValidate $request, $id)
    {
        $article = Article::find($id);

        $article->title=$request->title;
        $article->category_id = $request->category_id;
        $article->image = $request->image;
        $article->content = $request->content;
        $article->description = $request->description;
        $article->markdown_html_code =$request->markdown_html_code;
        $article->save();
        $tag_ids = [];
        $from_tags = strsToArray($request->keywords);
        $table_tags = Tag::whereIn('name', $from_tags)->get();

        if (count($table_tags) == count($from_tags)) {
            $tag_ids = $table_tags->pluck('id')->toArray();
        } else {
            $tag_ids = $table_tags->pluck('id')->toArray();
            $tag_name = $table_tags->pluck('name')->toArray();
            $new_tag = array_diff($from_tags, $tag_name);
            foreach ($new_tag as $value) {
                $tag = Tag::create(['name' => $value]);
                array_push($tag_ids, $tag->id);
            }
        }
        $article->tags()->sync($tag_ids);
        return redirect(route('article.index'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::destroy($id);
    }
    /**
     * 排序
     */
    public function sort(Request $request){
        $article =Article::find($request->id);
        $article->sort = $request->sort;
        $article->save();
        return response()->json(['status'=>1]);
    }
    /**
     * 浏览量
     */

    public  function view(Request $request){
        $article = Article::find($request->id);
        $article->view = $request->view;
        $article->save();
        return response()->json(['status'=>1]);
    }
    /**
     * 文章状态
     */
    public function status(Request $request){
        $article = Article::find($request->id);
        $article->status =$request->status;
        $article->save();
        return response()->json(['status'=>!$request->status]);
    }
}
