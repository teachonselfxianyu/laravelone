<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    //
    use SoftDeletes;
    protected $fillable = ['adminuser_id','title','desc','sort','image'];
    public function geImageLinktAttribute()
    {
        if(empty($this->image)){
            return asset('static/image/a.jpg');
        }
        return asset('storage/',$this->image);
        
    }
    //一对多关联的章节表
    public function chapter(){
        return $this->hasMany('App\Chapter')->orderBy('sort','asc');
    }
}
