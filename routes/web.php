<?php


//前端
Route::namespace('Home')->group(function (){
    Route::get('/','HomeController@index')->name('home.index');//首页
    Route::get('category/{category_id}','HomeController@category')->name('home.category');//分类页
    Route::get('article/{id}','HomeController@show')->name('home.show');//详细页
});
Route::post('photos','PhotoController@store')->middleware('auth');//图片上传
//后台
Route::prefix('admin')->namespace('Admin')->group(function (){
//    Route::get('/','TestController@index');//测试路由
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout')->name('logout');
    Route::middleware('auth')->group(function (){
        Route::get('/','AdminController@index');
        Route::post('category/sort','CategoryController@sort')->name('category.sort');//排序
        Route::post('category/status','CategoryController@status')->name('category.status');//菜单显示
        Route::resource('category','CategoryController');//文章分类
        Route::resource('article','ArticleController');//文章
        Route::resource('webset','WebsetController');//站点地图
    });
});
