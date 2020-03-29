<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AdminLogin;
use Illuminate\Support\Facades\Auth;
use App\AdminUser;

class LoginController extends Controller
{
    //登录表单
    public function index(){
        
        return view('admin.layouts.login');
    }

    //登录验证
    public function check(AdminLogin $request){
        $data = $request->validated();
        $is = Auth::guard('admin')->attempt( $data );
        $data['state'] = AdminUser::NORMAL;
        if(!$is){
            return back()->withErrors(['username' => '账号不可用']);
        }

        return redirect()->route('admin.index');
       

    }
    //退出登录
    public function logout(){
        
       $is = Auth::guard('admin')->logout();
       dump($is);
        //return redirect()->route('admin.index');
    }


}
