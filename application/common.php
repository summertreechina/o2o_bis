<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

function status($status) {
	switch ($status) {
		case '1':
			$str = '<span class="label label-success radius">正常</span>';
			break;
		case '0':
			$str = '<span class="label label-danger radius">等待审核</span>';
			break;
		case '-1':
			$str = '<span class="label label-danger radius">删除</span>';
			break;
		default:
			$str = '<span class="label label-info radius">请检查</span>';
			break;
	}

	return $str;
}









