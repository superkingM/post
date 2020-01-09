@extends('admin.layouts.app')
@section('content')
    <div class="tpl-content-wrapper">
        <div class="row-content am-cf">
            <div class="row">
                <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                    <div class="widget am-cf">
                        <div class="widget-head am-cf">
                            <div class="widget-title  am-cf"><a href="{{route('category.index')}}">文章分类</a> > 新增分类</div>
                        </div>
                        <div class="widget-body  am-fr">
                            <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                <div class="am-form-group">
                                    <div class="am-btn-toolbar">
                                        <div class="am-btn-group am-btn-group-xs">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="am-u-sm-12">
                                @include('admin.layouts._flash')
                                <form class="am-form am-form-horizontal" action="{{route('category.store')}}" method="post">
                                    @csrf
                                    <div class="am-form-group">
                                        <label for="doc-ipt-3" class="am-u-sm-2 am-form-label">分类名称</label>
                                        <div class="am-u-sm-10">
                                            <input type="text" name="name" id="doc-ipt-3" placeholder="输入分类名称">
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <div class="am-u-sm-10 am-u-sm-offset-2">
                                            <button type="submit" class="am-btn am-btn-default">确认</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


