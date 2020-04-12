@extends('admin.layouts.app')

@section('title')
文件管理
@endsection

@section('sidebar')
@include('admin.file.menu')
@endsection


@section('content')



@component('admin.components.page_title',['title'=>'文件管理','comment'=>'管理您的文件'])
@endcomponent
<div class='row mt-2'>
    <div class='col-12'>
        <table class='table table-sm'>
                <thead class='thead-light'>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">作者</th>
                        <th scope="col">类型</th>
                        <th scope="col">大小</th>
                        <th scope="col">文件名</th>
                        <th scope="col">地址</th>
                        <th scope="col">创建时间</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($files as $file)
                    <tr>
                    <th scope="row">{{$file->id}}</th>
                    <td scope="row">{{$file->adminUser->username}}</td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
</div>




@endsection