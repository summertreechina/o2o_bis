<?php
namespace app\admin\controller;
use think\Controller;

class Index extends Controller
{
	public function index() {
		// echo '我亲爱的nn';
		return $this->fetch();
	}

	public function test() {
		echo '我';
	}

	public function welcome() {
		// return $this->fetch();
		return '欢迎来到慕课网'.'<P>ThinkPHP-'.THINK_VERSION.'</P>';
	}
}
