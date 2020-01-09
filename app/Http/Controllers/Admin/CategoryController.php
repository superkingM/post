<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function __construct()
    {
        view()->share([
            '_category'=>'active'
        ]);
    }

    /**
     *分类首页
     */
    public function index()
    {
        $categories = Category::all();

//        return view('admin.category.index')->with(['categories'=>$categories]);
        return view('admin.category.index',compact('categories'));//推荐使用

    }

    /**
     * 创建分类
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     提交新增分类数据存储
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|unique:categories|max:10'
        ]);
        Category::create($request->all());
        return redirect(route('category.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     分类编辑
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
    }

    /**
     更新数据
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
        return redirect(route('category.index'));
    }

    /**
     删除
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect(route('category.index'));
    }
}
