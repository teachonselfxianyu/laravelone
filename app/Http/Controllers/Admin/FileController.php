<?php

namespace App\Http\Controllers\Admin;

use App\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileController extends Controller
{
    //
    public function index(File $fileModel){
        $data=[
            'files' => $fileModel->orderBy('id','desc')->get()
        ];
        dump($data);
        return view('admin.file.index',$data);

    }
    public function up(Request $request,File $fileModel){
        $data=[];
        return view('admin.file.up',$data);

    }
    public function save(Request $request,File $fileModel){
      
    }



}
