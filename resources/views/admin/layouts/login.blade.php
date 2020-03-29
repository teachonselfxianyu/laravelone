@extends('admin.layouts.guest')

@section('title')
管理员登录
@endsection
@section('content')
<div class='row'>
    <div class='offset-3'></div>
    <div class='col-6 mt-5 p-5 bg-light rounded'>
        <h3>管理员登录</h3>
        <form method="POST" action='{{route("admin.login")}}'>
        {{ csrf_field() }}
        <div class="form-group row">
        <label for="username" class="col-sm-2 col-form-label">用户</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="username" placeholder="请输入用户名" name='username'>
                <small class='form-text' text-muted>
                    @error('username')
                    <div class='alert alert-danger'>{{$message}}</div>
                    @enderror
            </div>
        </div>
        <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">密码</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="password" placeholder="请输入密码" name='password'>
                <small class='form-text' text-muted>
                    @error('password')
                    <div class='alert alert-danger'>{{$message}}</div>
                    @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class='col-2'></div>
            <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">登录</button>
            </div>
        </div>
        </form>
    </div>

</div>
@endsection