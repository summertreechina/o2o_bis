<?php
namespace app\api\controller;
use think\Controller;
// api
class City extends Controller
{
	private $obj;

	public function _initialize() {
		$this->obj = model('City');
	}

	public function getCitysByParentId() {
		$id = input('post.id');
		if (!$id) {
			$this->error('ID未正确获取');
		}
		$citys = $this->obj->getNormalCitysByParentId($id);
		if (!$citys) {
			return show(0, 'error');
		}

		return show(1, 'success', $citys);
	}

}