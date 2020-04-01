<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //配置首页
   
    public function index(Setting $setting){
        
       
        $settings = $setting->orderBy('sort','asc')->get();
        $data = [
            'settings'=> $settings
        ];
        return view('admin.setting.index',$data);
    }
    //保存配置
    public function save(Request $request, Setting $setting){
        $settings = $request->input('settings');
        foreach($settings as $key=>$value){
            $value = $value === null ? '' : $value;
            $setting->where('key',$key)->update(['value'=>$value]);

        }
        return redirect()->route('admin.setting');

    }
}
