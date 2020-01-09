@extends('admin.layouts.app')

@section('css')
    <link rel="stylesheet" href="/vendor/markdown/css/editormd.min.css"/>
@endsection

@section('content')
    <div class="tpl-content-wrapper">
        <div class="row-content am-cf">
            <div class="row">
                <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                    <div class="widget am-cf">
                        <div class="widget-head am-cf">
                            <div class="widget-title am-fl"><a href="{{route('article.index')}}">文章管理</a> > 写文章
                            </div>
                            <div class="widget-function am-fr">
                                <a href="javascript:;" class="am-icon-cog"></a>
                            </div>
                        </div>


                        <div class="widget-body am-fr">
                            @include('admin.layouts._flash')
                            <form class="am-form tpl-form-border-form tpl-form-border-br"
                                  action="{{route('article.store')}}" method="post">
                                @csrf
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">SEO简述描述
                                        <span class="tpl-form-line-small-title">Title</span></label>

                                    <div class="am-u-sm-9">
                                        <textarea type="text" class="tpl-form-input" name="description" placeholder="请输简述"></textarea>
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">SEO关键词
                                        <span class="tpl-form-line-small-title">Title</span></label>

                                    <div class="am-u-sm-9">
                                        <input type="text" class="tpl-form-input" name="keywords" placeholder="请输关键词用逗号隔开">
                                    </div>
                                </div>
                                <div class="am-form-group">

                                    <label for="user-name" class="am-u-sm-3 am-form-label">标题
                                        <span class="tpl-form-line-small-title">Title</span></label>

                                    <div class="am-u-sm-6">
                                        <input type="text" class="tpl-form-input" name="title" placeholder="请输入标题文字">
                                    </div>
                                    <div class="am-u-sm-3">
                                        <select data-am-selected="{btnSize: 'sm',btnStyle: 'secondary'}"
                                                name="category_id">
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="am-g am-margin-top">
                                    <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                        缩略图
                                    </div>

                                    <div class="am-u-sm-8 am-u-md-8 am-u-end col-end">
                                        <div class="am-form-group am-form-file new_thumb">
                                            <button type="button" class="am-btn am-btn-success am-btn-sm">
                                                <i class="am-icon-cloud-upload" id="loading"></i> 上传新的缩略图
                                            </button>
                                            <input type="file" id="image_upload">
                                            <input type="hidden" name="image">
                                        </div>

                                        <hr data-am-widget="divider" style=""
                                            class="am-divider am-divider-dashed am-no-layout">

                                        <div>
                                            <img src="" id="img_show" style="max-height: 200px;">
                                        </div>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <div id="markdown" class="editormd editormd-vertical"
                                         style="width: 100%; height: 300px;">
                                            <textarea rows="10" name="content" style="display:none;"
                                                      class="editormd-markdown-textarea"
                                                      placeholder="Enjoy Markdown! coding now..."></textarea>
                                    </div>

                                </div>
                                {{--<input type="hidden" name="is_push" value="1">--}}
                                {{--<input type="hidden" name="is_show" value="1">--}}
                                {{--<input type="hidden" name="sort" value="99">--}}
                                {{--<input type="hidden" name="status" value="1">--}}
                                {{--<input type="hidden" name="right" value="1">--}}
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
    <script src="/vendor/markdown/editormd.min.js"></script>
    <script src="/js/editormd_config.js"></script>
    <script type="text/javascript" src="/vendor/html5-fileupload/jquery.html5-fileupload.js"></script>
    <script type="text/javascript" src="/vendor/html5-fileupload/upload.js"></script>
@endsection
