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
}
