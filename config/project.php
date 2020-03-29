<?php
use App\AdminUser;
return[
    'admin' => [
        'state' =>[
            AdminUser::NORMAL => '<span class="text-success">正常</span>',
            AdminUser::BAN =>'<span class="text-danger">禁用</span>',
        ]
    ]
 ];