<?php
namespace app\index\controller;
use think\Controller;
use think\Session;

class User extends Controller
{
	//登录方法
	public function login()
	{
		return $this->fetch();
	}
	//注册方法
	public function register()
	{
		return $this->fetch();
	}
	//个人中心
	public function people()
	{
		$username = Session::get('username');
		$this->assign('username',$username);
		//判断session是否赋值
		//var_dump(Session::has('user'));
		return $this->fetch();
	}
	//抽奖页面
	public function reward()
	{
		return $this->fetch();
	}
	//意见与建议
	public function msg()
	{
		return $this->fetch();
	}
}