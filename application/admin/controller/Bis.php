<?php
namespace app\admin\Controller;
use think\Controller;

/**
* 商家管理控制器
*/
class Bis extends Controller
{
	private $obj;

	public function _initialize() {
		$this->obj = model('Bis');
	}

	public function apply() {
		$this->obj->getBisByStatus();
		return $this->fetch('apply');
	}

	public function detail() {

	}


}








?>