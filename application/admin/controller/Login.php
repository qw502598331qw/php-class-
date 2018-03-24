<?php
namespace app\Admin\controller;
use think\Controller;
use app\admin\model\Admin;
class Login extends Controller
{
    public function index()
    {
        if(request()->isPost()){
            $admin=new Admin();
            $data=input('post.');
            $num=$admin->login($data);
            if($num==3){
                $this->success('管理员信息正确，正在为您跳转...','index/index');
            }elseif($num==4){
                $this->error('验证码错误');
            }
            elseif($num==5){
                $this->success('用户信息正确，正在为您跳转...','index/index/index');
            }
            else{
                $this->error('用户名或者密码错误');
            }

        }
        return $this->fetch('login');
    }

    



}
