<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
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
    
        
    

}
