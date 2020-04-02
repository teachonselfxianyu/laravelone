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
<div class="row">
    <div class="col-12">
        <form method="get" action='{{route("admin.resource")}}'>
            <div class="form-row">
                <div class="col-auto">
                    <input type="text" name="keyword" class="form-control" placeholder="搜索标题" value='{{$search->keyword ?? ""}}'>
                </div>
                <div class="col-auto">
                    <input type="text" name="adminuser_id" class="form-control" placeholder="搜索作者id" value='{{$search->adminuser_id ?? ""}}'>
                </div>
                <div class="col-auto">
                    @foreach(config('project.resource.type') as $key=>$value)
                    <div class="form-check form-check-inline align-middle">
                    <label class="form-check-label">
                        @if(!$search->type)
                        
                        @else
                        <input name="type[{{$key}}]" class="form-check-input" type="checkbox" value="{{$key}}" {{isset($search->type[$key]) ? "checked" : ''}}>
                        {!!$value!!}
                    </label>
                    </div>
                    @endforeach
                </div>
                <div class="col-auto">
                    <input type="submit" class="btn btn-primary" value="搜索">
                </div>
                
            </div>
        </form>

    </div>
</div>
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
                        <th scope="row">{{$resource->adminUser->username}}</th>
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
        {{ $resources->appends(request()->all())->links() }}
    </div>
</div>
@endsection