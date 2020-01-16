@extends('admin.layouts.app')
@section('content')
    <div class="tpl-content-wrapper">
        <div class="row-content am-cf">
            <div class="row">
                <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                    <div class="widget am-cf">
                        <div class="widget-head am-cf">
                            <div class="widget-title  am-cf"><a href="{{route('article.index')}}">文章管理</a> ></div>
                        </div>
                        <div class="widget-body  am-fr">
                            <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                <div class="am-form-group">
                                    <div class="am-btn-toolbar">
                                        <div class="am-btn-group am-btn-group-xs">
                                            <a href="{{route('article.create')}}"
                                               class="am-btn am-btn-success am-btn-secondary">
                                                <span class="am-icon-calendar"></span> 添加文章
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form action="">
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                                    <div class="am-form-group tpl-table-list-select">
                                        <select data-am-selected="{btnSize: 'sm',btnStyle: 'secondary'}"
                                                name="category_id">
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                        <input type="text" name="title" class="am-form-field" placeholder="请输入标题"
                                               value="{{Request::input('title')}}">
                                        <span class="am-input-group-btn">
                                        <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search"
                                                type="submit"></button>
                                            <a type="button" href="{{route('article.index')}}"
                                               class="am-btn am-btn-success">重置</a>
                                    </span>
                                    </div>
                                </div>
                            </form>
                            <div class="am-u-sm-12">
                                <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black">
                                    <thead>
                                    <tr>
                                        <th>序号</th>
                                        <th>缩略图</th>
                                        <th style="width: 20%">文章标题</th>
                                        <th>所属分类</th>
                                        <th>浏览量</th>
                                        {{--<th>推荐</th>--}}
                                        <th>展示</th>
                                        <th>排序</th>
                                        <th>操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($articles as $article)
                                        <tr class="gradeX" data-id="{{$article->id}}">
                                            <td> {{$article->id}}</td>
                                            <td> <img src="{{$article->image}}" style="width: 40px;height: 40px"> </td>
                                            <td class="name"><a href="{{route('home.show',$article->id)}}" target="_blank">{{$article->title}}</a></td>
                                            <td> {{$article->category->name}}</td>
                                            <td> <input class="view" type="text" value="{{$article->view}}"></td>
                                            {{--<td>  @if($article->is_push)--}}
                                                    {{--<span class="am-icon-check is_push"></span>--}}
                                                {{--@else--}}
                                                    {{--<span class="am-icon-close is_push"></span>--}}
                                                {{--@endif</td>--}}
                                            <td>@if($article->status)
                                                    <span class="am-icon-check is_show"></span>
                                                @else
                                                    <span class="am-icon-close is_show"></span>
                                                @endif</td>
                                            <td><input class="sort" type="text" value="{{$article->sort}}"></td>
                                            {{--<td>--}}
                                            {{--@if($category->is_push)--}}
                                            {{--<span class="am-icon-check is_push" data-attr="{{$category->is_push}}"></span>--}}
                                            {{--@else--}}
                                            {{--<span class="am-icon-close is_push" data-attr="{{$category->is_push}}"></span>--}}
                                            {{--@endif--}}
                                            {{--</td>--}}
                                            <td>
                                                <div class="tpl-table-black-operation">
                                                    <a href="{{route('article.edit',$article->id)}}"
                                                       class="edit"><i class="am-icon-pencil"></i>编辑</a>
                                                    <a href="javascript:;"
                                                       class="tpl-table-black-operation-del del_one"><i
                                                                class="am-icon-trash"></i>删除</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="am-u-lg-12 am-cf">

                                <div class="am-fr">
                                    {{$articles->links()}}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function () {
            //删除单条
            $('.del_one').click(function () {
                var id = $(this).parents('tr').data('id');
                _this = $(this)

                $.ajax({
                    type: 'delete',
                    url: '/admin/article/' + id,
                    success: function () {
                        window.location.reload()
                    }
                })
            })
            //是否推送
            $('.is_push').click(function () {
                var id = $(this).parents('tr').data('id')
                if ($(this).hasClass('am-icon-check')) {
                    var is_push = 0
                } else {
                    var is_push = 1
                }
                var _this = $(this)
                $.ajax({
                    type: 'patch',
                    url: '/admin/artcle/is_push',
                    data: {id: id, is_push: is_push},
                    success: function (data) {
                        if (data.status == 1 && _this.hasClass('am-icon-check')) {
                            _this.removeClass('am-icon-check')
                            _this.addClass('am-icon-close')
                        } else {
                            _this.removeClass('am-icon-close')
                            _this.addClass('am-icon-check')
                        }
                        // console.log(data);
                    }

                })
            })
            //是否显示
            $('.is_show').click(function () {
                var id = $(this).parents('tr').data('id')
                if ($(this).hasClass('am-icon-check')) {
                    var is_show = 0
                } else {
                    var is_show = 1
                }
                var _this = $(this)
                $.ajax({
                    type: 'post',
                    url: '{{route('article.status')}}',
                    data: {id: id, status: is_show},
                    success: function (data) {
                        if (data.status == 1 && _this.hasClass('am-icon-check')) {
                            _this.removeClass('am-icon-check')
                            _this.addClass('am-icon-close')
                        } else {
                            _this.removeClass('am-icon-close')
                            _this.addClass('am-icon-check')
                        }
                        // console.log(data);
                    }

                })
            })
            //浏览量
            $('.view').change(function () {
                var id = $(this).parents('tr').data('id')
                var view = $(this).val()
                $.ajax({
                    type: 'post',
                    url: '{{route('article.view')}}',
                    data: {id: id, view: view},
                    success: function (data) {
                        window.location.reload()
                    }

                })
            })

            //sort
            $('.sort').change(function () {
                var id = $(this).parents('tr').data('id')
                var sort = $(this).val()
                $.ajax({
                    type: 'post',
                    url: '{{route('article.sort')}}',
                    data: {id: id, sort: sort},
                    success: function (data) {
                        window.location.reload()
                    }

                })
            })
        })
    </script>
    <style>
        .am-icon-check,.am-icon-close{
            cursor: pointer;
        }
    </style>
@endsection