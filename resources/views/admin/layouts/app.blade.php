<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('static/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('static/css/admin.css')}}">
    <link href="https://cdn.bootcss.com/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">
    @yield('css')
</head>
<body>
@include('admin.layouts.nav')
<div class="d-flex">
    <div class="sidebar navbar-nav">
        @yield('sidebar')
    </div>
    <div class="container-fluid">
        @include('admin.layouts.message')
        @yield('content')
    </div>
</div>

<script src="{{asset('static/js/bootstrap.min.js')}}"></script>
<script src="{{asset('static/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('static/js/popper.js')}}"></script>
@yield('js')
    
</body>

</html>