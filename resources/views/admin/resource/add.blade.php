@extends('admin.layouts.app')

@section('title')
资源管理
@endsection

@section('sidebar')
@include('admin.resource.menu')
@endsection


@section('content')



@component('admin.components.page_title',['title'=>'资源管理','comment'=>'课程资源管理'])
@endcomponent

@if($type == \App\Resource::VIDEO)
    @include('admin.resource.add_video')
@endif
@if($type == \App\Resource::DOC)
    @include('admin.resource.add_doc')
@endif
@endsection