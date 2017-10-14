<?php
namespace app\admin\controller;
use think\Controller;
use \phpmailer\TPEmail;

class Index extends Controller
{
	public function index() {
		\Map::getLngLat('山东青岛市南区金湖路16号');
		return $this->fetch();
	}

	public function welcome() {
		// TPEmail::send(2,2,2);
		// return '发送邮件成功';
		return '欢迎来到慕课网'.'<P>ThinkPHP-'.THINK_VERSION.'</P>';
	}

	public function map() {
		return \Map::staticimage('山东青岛市南区金湖路16号');
	}


}
