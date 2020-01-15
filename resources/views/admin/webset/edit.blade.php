@extends('admin.layouts.app')
@section('content')
    <div class="tpl-content-wrapper">
        <div class="row-content am-cf">
            <div class="row">
                <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                    <div class="widget am-cf">
                        <div class="widget-head am-cf">
                            <div class="widget-title am-fl"><a href="{{route('article.index')}}">站点管理</a> > 站点地图
                            </div>
                            <div class="widget-function am-fr">
                                <a href="javascript:;" class="am-icon-cog"></a>
                            </div>
                        </div>


                        <div class="widget-body am-fr">
                     @include('admin.layouts._flash')
                            <form class="am-form tpl-form-border-form tpl-form-border-br"
                                  action="{{route('webset.store')}}" method="post">
                                @csrf
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">网站标题
                                        <span class="tpl-form-line-small-title">Title</span></label>

                                    <div class="am-u-sm-9">
                                        <input type="text" class="tpl-form-input" name="title" value="{{@$web->title}}">
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">网站关键词
                                        <span class="tpl-form-line-small-title">Keywords</span></label>

                                    <div class="am-u-sm-9">
                                        <input type="text" class="tpl-form-input" name="keywords" value="{{@$web->keywords}}">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">备案信息
                                        <span class="tpl-form-line-small-title">Site</span></label>

                                    <div class="am-u-sm-9">
                                        <input type="text" class="tpl-form-input" name="site" value="{{@$web->site}}">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">网站描述
                                        <span class="tpl-form-line-small-title">Description</span></label>



                                    <div class="am-u-sm-9">
                                        <textarea type="text" class="tpl-form-input" name="desc" value="">{{@$web->desc}}</textarea>
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">
                                            保存
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
