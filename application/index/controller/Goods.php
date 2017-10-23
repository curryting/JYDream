<?php
namespace app\index\controller;
use think\Controller;
class Goods extends Controller
{
	//商品详情
	public function details()
	{
		return $this->fetch();
	}
	//品牌店铺列表
	public function goods_list()
	{
		return $this->fetch();
	}
	//购物车
	public function shop_car()
	{
		return $this->fetch();
	}
	//搜索后的商品列表
	public function search()
	{
		return $this->fetch();
	}
	//商品分类
	public function category()
	{
		return $this->fetch();
	}
}