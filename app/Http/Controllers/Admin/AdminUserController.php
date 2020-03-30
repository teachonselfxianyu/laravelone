<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AdminUser;
use App\Http\Requests\AdminUserRequest;
use Illuminate\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;




class AdminUserController extends Controller
{
    //列表
    public function index(AdminUser $adminuser){
        $adminusers = $adminuser->orderBy('id','desc')->get();
        $data = [
            'adminusers' => $adminusers,
        ];
        
        return view('admin.adminuser.index',$data);

    }

    //添加
    public function add(AdminUser $adminuser){
        $this->authorizeForUser(Auth::guard('admin')->user(),'modify',$adminuser);
        $data =[
            'adminusers' => $adminuser
        ];
       
        return view('admin.adminuser.add',$data);

    }
    //保存
    public function save(AdminUserRequest $request ,AdminUser $adminuser){

        //$this->authorizeForUser(Auth::guard('admin')->user(),'modify',$adminuser);
        //$this->authorizeForUser(Auth::guard('admin')->user(),'remove',$adminuser);
        
       
        $data = $request->validated();
        //添加编辑的切换
        
        
        $data['state'] = AdminUser::NORMAL;
        if($adminuser->id){
            //如果密码存在，密码加密存入
            if($data['password']){
                $data['password'] =Hash::make($data['password']);

            }
            else{
                unset($data['password']);
            }
            $adminuser->update($data);

        }
        else{
            $data['password'] =Hash::make($data['password']);
            $data['state'] = AdminUser::NORMAL;
            $adminuser->create($data);
        }
         
        
        
        return redirect()->route('admin.adminuser');

    }
    //删除
    public function remove(AdminUser $adminuser){
        
        $this->authorizeForUser(Auth::guard('admin')->user(),'remove',$adminuser);
       
        $adminuser->delete();
        return back();

    }
    //状态切换
    public function state(AdminUser $adminuser){
      $this->authorizeForUser(Auth::guard('admin')->user(),'remove',$adminuser);
      $new_state = ($adminuser->state == AdminUser::NORMAL) ? AdminUser::BAN : AdminUser::NORMAL;
      $adminuser->state = $new_state;
      $adminuser->save();
      
      return back();

    }
}
