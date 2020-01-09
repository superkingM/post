@extends('admin.layouts.app')
@section('content')
    登录的用户是:{{\Auth()->user()->name}}
@endsection