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
		echo THINK_VERSION;
		return '这是一个空操作';
	}

	public function index() {
		$parent_id = input('get.parent_id', 0, 'intval');
		$categorys = $this->obj->getFirstCategorys($parent_id);
		return $this->fetch('', [
			'categorys' => $categorys,
		]);
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
		if (!request()->isPost()) {
			$this->error('非法请求');
		}
		$data = input('post.');
		// \kint\Kint::d($data);die;
		$validate = validate('Category');

		if (!$validate->scene('add')->check($data)) {
			$this->error($validate->getError());
		}
		if (!empty($data['id'])) {
			return $this->update($data);
		}
		// 
		$res = $this->obj->add($data);
		if ($res) {
			$this->success('新增数据成功');
		} else {
			$this->error('新增数据失败');
		}
	}

	public function edit($id=0) {
		if (intval($id) < 0) {
			$this->error('参数出错，请检查');
		}

		$category = $this->obj->get($id);
		$categorys = $this->obj->getNormalFirstCategory();
		return $this->fetch('', [
			'category' => $category,
			'categorys' => $categorys,
		]);
	}

	public function update($data) {
		$res = $this->obj->save($data, ['id' => intval($data['id'])]);
		if ($res) {
			$this->success('更新成功');
		} else {
			$this->error('更新失败，请检查');
		}
		
	}

	public function listorder($id, $listorder) {
		 $res = $this->obj->save(['listorder'=> $listorder], ['id'=> $id]);
		 if ($res) {
		 	$this->result($_SERVER['HTTP_REFERER'], 1, '成功');
		 } else {
		 	$this->result($_SERVER['HTTP_REFERER'], 0, '失败');
		 }
	}

	public function status($id, $status) {
		$data = input('get.');
		$validate = validate('Category');
		if (!$validate->scene('status')->check($data)) {
			$this->error($validate->getError());
		};
		$res = $this->obj->save(['status'=>$data['status']], ['id'=>$data['id']]);
		if ($res) {
			$this->success('更新成功');
		} else {
			$this->error('更新失败，请检查');
		}
		

	}







}
