@extends('admin.layouts.app')

@section('title')
上传文件管理
@endsection

@section('sidebar')
@include('admin.file.menu')
@endsection


@section('content')



@component('admin.components.page_title',['title'=>'文件管理','comment'=>'上传您的文件'])
@endcomponent




@endsection