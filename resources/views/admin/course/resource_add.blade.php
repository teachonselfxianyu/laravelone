@extends('admin.layouts.app')

@section('title')
资源管理
@endsection

@section('sidebar')
@include('admin.course.menu')
@endsection


@section('content')



@component('admin.components.page_title',['title'=>'资源关联','comment'=>"为{$chapter->title} - {$chapter->title}关联资源"])
<a href="{{route('admin.course.detail',[$course->id])}}" class="btn btn-primary btn-sm">返回课程</a>
@endcomponent
<div class="row">
    <div class="col-12">
        <table class="table table-sm">
        <thead class='thead-light'>
                <tr>
                    <th scope="col">资源id</th>
                    <th scope="col">排序</th>
                    <th scope="col">资源标题</th>
                 </tr>
        </thead>
            <tbody>
                <form action="{{route('admin.course.resource.add',[$course->id,$chapter->id])}}" method="post">
                    @csrf
                @foreach($chapter->resource as $resource)
               
                <tr>
                    <td>
                        <input type="text" class="form-control" name="resource_id[]" placeholder="" value='{{$resource->id}}'>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="sort[]" placeholder="" value='{{$resource->pivot->sort}}'>
                    </td>
                    <td>
                    {!!$resource->typeName!!}
                    <a href="{{route('admin.resource.add',[$resource->id])}}">
                    {{$resource->title}}
                    </a>     
                    </td>
                </tr>
                @endforeach
                <tr style="background: #f8f8f8">
                    <td>
                        <input type="text" class="form-control" name="resource_id[]" placeholder="目标资源id">
                    </td>
                    <td>
                        <input type="text" class="form-control" name="sort[]" placeholder="排序数字">
                    </td>
                    <td class="text-muted align-middle"> 
                        请输入想关联的资源id、排序（正序）   
                    </td>

                </tr>
                <tr>
                    <td colspan="3">
                    <input type="submit" value="保存全部" class="btn btn-sm btn-primary">
                    </td>
                </tr>
                </form>
            </tbody>
        </table>
    </div>
</div>




@endsection