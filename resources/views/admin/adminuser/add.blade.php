@extends('admin.layouts.app')

@section('title')
管理员添加
@endsection

@section('sidebar')
@include('admin.adminuser.menu')
@endsection


@section('content')



@component('admin.components.page_title',['title'=>'管理员','comment'=>'管理员管理'])
@endcomponent
<div class='row'>
    <div class='col-12'>
    <form method="POST" action='{{route("admin.adminuser.add")}}'>
    @csrf
        <div class="form-group row">
            <label  class="col-sm-2 col-form-label">用户名</label>
            <div class="col-sm-10">
                <input type='text' class="form-control" name="username" value='{{old("username")}}'>
                @error('username')
                <small class='from-text text-danger'>{{$message}}</small>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label  class="col-sm-2 col-form-label">密码</label>
            <div class="col-sm-10">
                <input type='text' class="form-control" name="password" value='{{old("password")}}'>
                @error('password')
                <small class='from-text text-danger'>{{$message}}</small>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label  class="col-sm-2 col-form-label">确认密码</label>
            <div class="col-sm-10">
                <input type='text' class="form-control" name="password2" value='{{old("password2")}}'>
            </div>
        </div>
        <div class="form-group row">
            <div class='offset-2'></div>
            <div class='col-10'>
                <button type="submit" class="btn btn-primary">保存</button>
            </div>
        </div>
        </form>
    </div>

    

</div>

@endsection