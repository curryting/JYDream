<?php
namespace app\admin\model;
use think\Model;

class Category extends Model
{
	public function insert($data)
	{
		return Category::allowField(true)->save($data);
	}
}