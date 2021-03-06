@extends('admin.layouts.app')

@section('title')
管理员管理
@endsection

@section('sidebar')
@include('admin.adminuser.menu')
@endsection


@section('content')



@component('admin.components.page_title',['title'=>'管理员','comment'=>'管理员管理'])
@endcomponent



<table class="table table-sm">
  <thead class='thead-light'>
    <tr>
      <th scope="col">#</th>
      <th scope="col">用户名</th>
      <th scope="col">时间</th>
      <th scope="col">状态</th>
      <th scope="col">管理</th>
    </tr>
  </thead>
  <tbody>
  @foreach($adminusers as $adminuser)
    <tr>
      <th scope="row">{{$adminuser->id}}</th>
      <td>{{$adminuser->username}}</td>
      <td>{{$adminuser->created_at}}</td>
      <td><a onclick='return confirm("确认更改吗")'   href='{{route("admin.adminuser.state",$adminuser->id)}}'>{!!$adminuser->stateText!!}</a></td>
      <td>
      <a   class="btn btn-sm btn-secondary" href='{{route("admin.adminuser.add",[$adminuser->id])}}'>修改</a>
      <a class="btn btn-sm btn-danger" onclick='return confirm("确认删除吗")' href='{{route("admin.adminuser.remove",$adminuser->id)}}'>删除</a>
      </td>
    </tr>
  </tbody>
  @endforeach
</table>
@endsection




