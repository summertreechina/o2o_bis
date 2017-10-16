<?php
namespace app\bis\controller;
use think\Controller;
// 控制器
class Register extends Controller
{
	public function index() {
		$citys = model('City')->getNormalCitysByParentId();
		// print_r($citys);die;
		return $this->fetch('', [
			'citys' => $citys,
		]);
	}
}