@extends('admin.layouts.app')

@section('title')
课程详情
@endsection

@section('sidebar')
@include('admin.course.menu')
@endsection


@section('content')



@component('admin.components.page_title',['title'=>'课程详情','comment'=>"当前课程为{$course->title}"])
<a class="btn btn-sm btn-primary" href='{{route("admin.course.chapter.add",[$course->id])}}'>添加章节</a>
@endcomponent
@foreach($course->chapter()->get() as $chapter)
<div class="row mt-2 mb-2">
    <div class="col-12">
        <div class="d-flex mb-2">
        <h5 class="m-0 p-0">{{$chapter->sort}} {!!$chapter->title!!}</h5>
        <small class="text-muted mr-auto pl-2 align-middle" style="margin: auto 0">
        {{$chapter->desc}}
        </small>
        <a href="{{route('admin.course.chapter.add',[$course->id,$chapter->id])}}" class="btn btn-primary btn-sm mb-1 mr-1">编辑</a>
        <a href="{{route('admin.course.resource.add',[$course->id,$chapter->id])}}" class="btn btn-success btn-sm mb-1 mr-1">资源</a>
        <a href="{{route('admin.course.chapter.remove',[$course->id,$chapter->id])}}" class="btn btn-danger btn-sm mb-1 mr-1">移除</a>
        </div>
    </div>
    <div class="col-12">
        <table class="table table-sm">
            @foreach($chapter->resource as $resource)
            <tr>
                <th width='100'>{{$resource->id}}</th>
                <th width='100'>{!!$resource->typeName!!}</th>
                <td><a href="">{{$resource->title}}</a></td>
            </tr>
            @endforeach

        </table>  
    </div>
</div>
@endforeach


@endsection