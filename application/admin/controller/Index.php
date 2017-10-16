<?php
namespace app\admin\controller;
use think\Controller;
use \phpmailer\TPEmail;

class Index extends Controller
{
	public function index() {
		// \Map::getLngLat('山东青岛市南区金湖路16号');
		return $this->fetch();
	}

	public function welcome() {
		// TPEmail::send('8669560@qq.com', '插件封装阶段测试2', '小鹏鹏辛苦了');
		return '<P>欢迎来到慕课网</P>'.'<P>ThinkPHP-'.THINK_VERSION.'</P>';
	}

	public function map() {
		return \Map::staticimage('山东青岛市南区金湖路16号');
	}


}
