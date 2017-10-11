<?php
namespace app\admin\controller;
use think\Controller;

class Index extends Controller
{
	public function index() {
		// echo 'nn';
		// \Map::getLngLat('山东青岛市南区金湖路16号');die();
		return $this->fetch();
	}

	public function welcome() {
		// return $this->fetch();
		return '欢迎来到慕课网'.'<P>ThinkPHP-'.THINK_VERSION.'</P>';
	}

	public function map() {
		return \Map::staticimage('山东青岛市南区金湖路16号');
	}


}
