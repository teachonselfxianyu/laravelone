<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">后台管理</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.setting')}}"><i class="fas fa-cog"></i>系统设置 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.adminuser')}}"><i class="fas fa-user-circle"></i>管理员</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.resource')}}"><i class="fas fa-folder-open"></i>课程资源</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.course')}}"><i class="fas fa-cog"></i>课程管理</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-clone"></i>文件管理</a>
      </li>
    </ul>
  </div>
  <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="" tabindex="-1"><i class="fas fa-user-circle"></i>管理员</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.logout')}}" tabindex="-1">退出</a>
            </li>
        </ul>
  </div>
</nav>