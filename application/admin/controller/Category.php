<?php
namespace app\admin\controller;
use think\Controller;

class Category extends Controller
{
	private $obj;

	public function _initialize() {
		$this->obj = model('Category');
	}

	public function _empty() {
		return '这是一个空操作';
	}

	public function index() {
		return $this->fetch();
	}

	public function category() {
		return $this->fetch();
	}

	public function add() {
		$categorys = $this->obj->getNormalFirstCategory();
		return $this->fetch('', [
			'categorys' => $categorys,
		]);

	}

	public function save() {
		$data = input('post.');
		$validate = validate('Category');
		if (!$validate->scene('add')->check($data)) {
			$this->error($validate->getError());
		}
		// 
		$res = $this->obj->add($data);
		if ($res) {
			$this->success('新增数据成功');
		} else {
			$this->error('新增数据失败');
		}
		
	}
}
