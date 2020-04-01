<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    //资源列表
    public function index(Resource $resource){
        $resources = $resource->orderBy('id','asc')->get();
        $data = [
            'resources' => $resources
        ];
        return view('admin.resource.index',$data);
    }
    //添加资源
    public function add(Request $request , Resource $resource){
        
        $type = $request->input('type',null);
        if(!$type){
            return redirect()->route('admin.resource');
        }
        $data = [
            'type' => $type
        ];
        return view('admin.resource.add',$data);

    }
    //保存资源
    public function save(Request $request , Resource $resource){

    }
    //移除资源 
    public function remove(Request $request , Resource $resource){

    }
    //上传图片
    public function up(Request $request){

    }
}
