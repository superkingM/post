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
                                        <th>操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($categories as $category)
                                        <tr class="gradeX" data-id="{{$category->id}}">
                                            <td>{{$category->id}}</td>
                                            <td class="name">{{$category->name}}</td>
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
                                    {{--<td>--}}
                                    {{--@if($category->is_push)--}}
                                    {{--<span class="am-icon-check is_push" data-attr="{{$category->is_push}}"></span>--}}
                                    {{--@else--}}
                                    {{--<span class="am-icon-close is_push" data-attr="{{$category->is_push}}"></span>--}}
                                    {{--@endif--}}
                                    {{--</td>--}}
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
        })
    </script>
@endsection




