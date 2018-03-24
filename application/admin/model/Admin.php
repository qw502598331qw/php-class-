<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Admin extends Model
{

	public function login($data){
		$captcha = new \think\captcha\Captcha();
        if (!$captcha->check($data['code'])) {
            return 4;
        } 
		$user=Db::name('admin')->where('username','=',$data['username'])->find();
		if($user){
			if($user['password'] == md5($data['password'])){

				session('username',$user['username']);
				session('uid',$user['id']);
                if(0 == ($user['user'])){
                    session('quan',$user['username']);
                    return 3; //管理员信息正确

                }
                else{
                    session('quan',null);
                    return 5; //用户信息正确
                }

			}else{
				return 2; //密码错误
			}
		}else{
			return 1; //用户不存在
		}
	}

}
