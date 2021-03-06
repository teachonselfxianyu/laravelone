<?php
use App\AdminUser;
use App\Resource;
return[
    'admin' => [
        'state' =>[
            AdminUser::NORMAL => '<span class="text-success">正常</span>',
            AdminUser::BAN =>'<span class="text-danger">禁用</span>',
        ]
        ],
    'resource' => [
        'type' =>[
            Resource::VIDEO => '<span class="text-success">视频</span>',
            Resource::DOC => '<span class="text-primary">文档</span>'

        ]
        ],
    'upload' => [
        'type' => [
            'doc_editor'=>'资源编辑器',
            'course_image'=> '课程头图',
            'other_upload'=> '独立上传',

        ],
        'image' => [
            'jpg','jpeg','gif','png','raf'
        ],
        'files' =>['jpg','jpeg','gif','zip','rar','png']
    ]
 ];