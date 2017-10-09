<?php
namespace app\admin\validate;
use think\Validate;

/**
* 
*/
class Category extends Validate{

	protected $rule = [
		['name', 'require|max: 10', '分类名必需填写|且最多10个字符'],
		['parent_id', 'number', '父级分类出错，请检查'],
		['id', 'number', 'ID出错，请检查'],
		['status', 'number|in:-1,0,1', '状态必需是数字|状态只能是-1,0,1'],
		['listorder', 'number'],
	];

	protected $scene = [
		'add' => ['name', 'parent_id', 'id'],	// 添加、编辑功能时使用
		'listorder' => ['id', 'number'],	// 排序功能时使用
		'status' => ['id', 'status'],
	];

	
	function __construct()
	{
		echo '调用了Category验证';
	}
}


































?>


