<?php
namespace app\index\controller;
use app\index\model\Member;
 
class UserInfo
{
	public function info()
	{
		file_put_contents('2.txt', $_POST);
		echo "haha";
	}
	public function index()
	{
		
	}
}