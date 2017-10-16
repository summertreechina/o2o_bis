<?php
namespace app\Common\model;
use think\Model;
// 数据模型
class City extends Model
{
	public function getNormalCitysByParentId($parentId=0) {
		$data = [
			'status' => 1,
			'parent_id' => $parentId,
		];

		$order = [
			'id' => 'desc',
		];

		return $this->where($data)->order($order)->select();
	}
}
