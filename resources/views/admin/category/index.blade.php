@extends('admin.layouts.app')
@section('content')
    <div class="tpl-content-wrapper">
        <div class="row-content am-cf">
            <div class="row">
                <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                    <div class="widget am-cf">
                        <div class="widget-head am-cf">
                            <div class="widget-title  am-cf"><a href="{{route('category.index')}}">文章分类</a> > 分类管理</div>
                        </div>
                        <div class="widget-body  am-fr">
                            <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                <div class="am-form-group">
                                    <div class="am-btn-toolbar">
                                        <div class="am-btn-group am-btn-group-xs">
                                            <a href="{{route('category.create')}}" class="am-btn am-btn-success am-btn-secondary">
                                                <span class="am-icon-calendar"></span> 添加分类
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="am-u-sm-12">
                                <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black">
                                    <thead>
                                    <tr>
                                        <th>序号</th>
                                        <th>分类名称</th>
                                        <th>排序</th>
                                        <th>显示</th>
                                        <th>操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($categories as $category)
                                        <tr class="gradeX" data-id="{{$category->id}}">
                                            <td>{{$category->id}}</td>
                                            <td class="name">{{$category->name}}</td>
                                            <td><input class="sort" type="text" value="{{$category->sort}}"></td>
                                            <td>
                                            @if($category->status)
                                            <span class="am-icon-check is_push" data-attr="{{$category->status}}"></span>
                                            @else
                                            <span class="am-icon-close is_push" data-attr="{{$category->status}}"></span>
                                            @endif
                                            </td>
                                            <td>
                                                <div class="tpl-table-black-operation">
                                                    <a href="{{route('category.edit',$category->id)}}" class="edit"><i class="am-icon-pencil"></i>编辑</a>
                                                    <a href="javascript:;"
                                                       class="tpl-table-black-operation-del del_one" ><i
                                                                class="am-icon-trash" ></i>删除</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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
                var id =$(this).parents('tr').data('id');
                _this = $(this)

                $.ajax({
                    type:'delete',
                    url:'/admin/category/'+id,
                    success:function () {
                        window.location.reload()
                    }
                })
            })
            //排序
            $('.sort').change(function () {
                var id = $(this).parents('tr').data('id')
                var sort = $(this).val()
                $.ajax({
                    type: 'post',
                    url: '{{route('category.sort')}}',
                    data: {id: id, sort: sort},
                    success: function (data) {
                        window.location.reload()
                    }

                })
            })

            //是否显示
            $('.is_push').click(function () {
                var id = $(this).parents('tr').data('id')
                if ($(this).hasClass('am-icon-check')) {
                    var is_push = 0
                } else {
                    var is_push = 1
                }
                var _this = $(this)
                $.ajax({
                    type: 'post',
                    url: '{{route('category.status')}}',
                    data: {id: id, status: is_push},
                    success: function (data) {
                      
                        if (data.status == "1" && _this.hasClass('am-icon-check')) {
                            _this.removeClass('am-icon-check')
                            _this.addClass('am-icon-close')
                        } else if (data.status == 0) {
                            _this.removeClass('am-icon-close')
                            _this.addClass('am-icon-check')
                        }
                        // console.log(data);
                    }

                })
            })
        })
    </script>
@endsection




