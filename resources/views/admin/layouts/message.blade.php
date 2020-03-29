<?php
//use APP\Models\AdminUser;
//$flight = new AdminUser;
/*
 * @Author: your name
 * @Date: 2020-03-11 21:47:00
 * @LastEditTime: 2020-03-16 22:51:04
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \blog\resources\views\admin\layouts\message.blade.php
 */
//dump('$flight');


?>
@foreach(['success','danger'] as $message)
@if(session()->has($message))
<div class="message mt-2">
    <div class="alert alert-{{$message}}">
        {{session()->get($message)}}
    </div>
    <script>
    setTimeout(() => {
        $(".alert").alert('close');
    }, 5000);
    </script>

</div>
@endif
@endforeach