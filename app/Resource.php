<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use PhpParser\Node\Expr\FuncCall;

class Resource extends Model
{
    //
    use SoftDeletes;
    protected $fillable = ['adminuser_id','type','title','desc'];
    const VIDEO = 1 ;
    const DOC = 2 ;
    //资源类型获取器
    public function getTypeNameAttribute($key){
        return config('project.resource.type')[$this->type];
    }

    //资源反向一对多关联
    public function adminUser(){
        return $this->BelongsTo('App\AdminUser','adminuser_id');
    }
    
        
    

}
