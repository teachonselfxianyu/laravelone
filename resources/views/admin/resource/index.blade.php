@extends('admin.layouts.app')

@section('title')
资源管理
@endsection

@section('sidebar')
@include('admin.adminuser.menu')
@endsection


@section('content')



@component('admin.components.page_title',['title'=>'资源管理','comment'=>'课程资源管理'])
@endcomponent
@endsection