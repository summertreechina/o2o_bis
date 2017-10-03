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
		echo '我亲爱的nn';
	}

	public function welcome() {
		return $this->fetch();
	}
}
