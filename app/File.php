<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class File extends Model
{
    //
    use SoftDeletes;
    protected $fillable = ['adminuser_id','filetype','filepath','client_filename','fileext','filesize'];

    //文件地址
    public function getFileLinkAttribute()
    {
        return asset("storage/".$this->filepath);
        
    }



    public function saveFile($type,$file_path,$file){
        $data = [
            'adminuser_id' => Auth::guard('admin')->id(),
            'filetype' => 'doc_editor',
            'filepath' => $file_path,
            'client_filename' => $file->getClientOriginalName(),
            'fileext' => $file->extension(),
            //'filesize' => $file->getC(),
 
        ];
        $this->create($data);
    }
    public function adminUser(){
        return $this->belongsToMany('App\AdminUser','adminuser_id');
    }
}
