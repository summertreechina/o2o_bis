<?php
<?php
namespace app\common\validate;
use think\Validate;

class Bis extends Validate{

	protected $rule = [
		// ['name', 'require|max: 10', '分类名必需填写|且最多10个字符'],
		// ['parent_id', 'number', '父级分类出错，请检查'],
		// ['id', 'number', 'ID出错，请检查'],
		// ['status', 'number|in:-1,0,1', '状态必需是数字|状态只能是-1,0,1'],
		// ['listorder', 'number'],

		// 下面是简单方式
		'name' => 'require|max:25',
		'email' => 'email',
		'logo' => 'require',
	];

	// 场景设置
	protected $scene = [
		'add' => ['name', 'parent_id', 'id'],	// 添加
		'listorder' => ['id', 'number'],	// 
		'status' => ['id', 'status'],
	];

	

}




















?>