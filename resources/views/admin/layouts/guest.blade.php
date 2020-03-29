<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('static/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('static/css/admin.css')}}">
    @yield('css')
</head>
<body>
<div class='container'>
        @yield('content')
</div>
<script src="{{asset('static/js/bootstrap.min.js')}}"></script>
<script src="{{asset('static/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('static/js/popper.js')}}"></script>
@yield('js')
    
</body>

</html>