<?php
namespace app\bis\controller;
use think\Controller;
// 控制器
class Register extends Controller
{
	public function index() {
		$citys = model('City')->getNormalCitysByParentId();
		// print_r($citys);die;
		return $this->fetch('', [
			'citys' => $citys,
		]);
	}

	public function add() {
		if (!request()->isPost()) {
			return $this->error('数据传输类型错误');
		}

		$data = input('post.');
		$validate = validate($data);
		// ....

		// 获取经纬度
		
		// 发送邮件
		$url = request()->domain().url('bis/Register/waiting', ['id'=>$bisId]);
		$title = '';
		$content = '';
		\phpmailer\TPEmail::send($data['email'], $title, $content);

		$this->success('申请成功', url('Register/waiting', ['id'=>$bisId]));
	}

	public function waiting($id) {
		if (empty($id)) {
			return $this->error('无效ID');
		}
		$detail = model('Bis')->get($id);

		$this->fetch('', [
			'detail' => $detail,
		]);
	}





}