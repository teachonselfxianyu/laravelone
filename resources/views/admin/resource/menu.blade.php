<ul class="list-group menu rounded m-3">
  <li class="list-group-item">
    <a class='btn m-0 p-0' href='{{route("admin.resource")}}'>课程资源</a>
  </li>
  <li class="list-group-item">
    <a class='btn m-0 p-0' href='{{route("admin.resource.add",["type"=>App\Resource::DOC])}}'>添加文档</a>
  </li>
  <li class="list-group-item">
    <a class='btn m-0 p-0' href='{{route("admin.resource.add",["type"=>App\Resource::VIDEO])}}'>添加视频</a>
  </li>
  
</ul>