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
<div class='row mt-2'>
    <div class='col-12'>
        <table class='table table-sm'>
                <thead class='thead-light'>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">作者</th>
                        <th scope="col">类型</th>
                        <th scope="col">标题</th>
                        <th scope="col">创建时间</th>
                        <th scope="col">管理</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($resources as $resource)
                    <tr>
                        <th scope="row">{{$resource->id}}</th>
                        <th scope="row">{{$resource->adminuser_id}}</th>
                        <th scope="row">{!!$resource->type_name!!}</th>
                        <td>{{$resource->title}}</td>
                        <td>{{$resource->created_at}}</td>
                        <td>
                        <a class="btn btn-sm btn-secondary" href=''>修改</a>
                        <a class="btn btn-sm btn-danger" onclick='return confirm("确认删除吗")' href=''>删除</a>

                        </td>
                    </tr>
                </tbody>
                @endforeach

        </table>
    </div>
</div>
@endsection