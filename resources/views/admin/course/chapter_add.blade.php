@extends('admin.layouts.app')

@section('title')
章节添加
@endsection

@section('sidebar')
@include('admin.course.menu')
@endsection


@section('content')



@component('admin.components.page_title',['title'=>'章节添加','comment'=>"添加{$course->title}章节"])
@endcomponent
<div class="col-12">
    <form method="POST" action="{{route('admin.course.chapter.add',[$course->id])}}" enctype="multipart/form-data">
        @csrf
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">标题</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="title" placeholder="" value='{{old("title",$chapter->title)}}'>
                    @error('title')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">简介</label>
        <div class="col-sm-10">
        <textarea class="form-control" name="desc">{{old("desc",$chapter->desc)}}</textarea>
                    @error('desc')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">排序</label>
        <div class="col-sm-10">
        <textarea class="form-control" name="sort">{{old("desc",$chapter->sort)}}</textarea>
                    @error('sort')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
        </div>
    </div>
    <div class="form-group row">
            <div class='offset-2'></div>
                <div class='col-10'>
                    <button type="submit" class="btn btn-primary">保存</button>
                </div>
    </div>
    </form>




@endsection