@extends('admin.layouts.app')
@section('content')
    <div class="tpl-content-wrapper">
        <div class="row-content am-cf">
            <div class="row">
                <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                    <div class="widget am-cf">
                        <div class="widget-head am-cf">
                            <div class="widget-title  am-cf"><a href="{{route('ip.index')}}">访问记录</a> ></div>
                        </div>
                        <div class="widget-body  am-fr">

                            <form action="">
                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                        <div class="am-form-group am-form-icon">
                                            <i class="am-icon-calendar"></i>
                                            <input type="date" class="am-form-field am-input-sm" name="d0" placeholder="日期">
                                        </div>
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                        <div class="am-form-group am-form-icon">
                                            <i class="am-icon-calendar"></i>
                                            <input type="date" class="am-form-field am-input-sm" name="d1" placeholder="日期">
                                        </div>
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                        <input type="text" name="ip" class="am-form-field" placeholder="请输入标题"
                                               value="{{Request::input('ip')}}">
                                        <span class="am-input-group-btn">
                                        <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search"
                                                type="submit"></button>
                                    </span>
                                    </div>
                                </div>
                            </form>
                            <div class="am-u-sm-12">
                                <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black">
                                    <thead>
                                    <tr>
                                        <th>序号</th>
                                        <th style="width: 20%">url</th>
                                        <th>ip</th>
                                        <th>设备</th>
                                        <th>时间</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($ips as $key=>$ip)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$ip->url}}</td>
                                            <td>{{$ip->ip}}</td>
                                            <td>{{$ip->device}}</td>
                                            <td>{{$ip->created_at}}</td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>

                            <div class="am-u-lg-12 am-cf">

                                <div class="am-fr">
                                    {{$ips->appends(Request::all())->links()}}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection