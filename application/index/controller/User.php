<?php
namespace app\index\controller;
use think\Controller;

class User extends Controller
{
	public function index() {
		echo "这里是 User 控制器";
	}

	public function login() {
		return $this->fetch();
	}

	public function register() {
		return $this->fetch();
	}

}
