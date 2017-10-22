<?php
namespace app\api\controller;
use think\Controller;
use think\Request;
use think\File;
// api 图片上传处理
class Image extends Controller
{
	public function upload() {
		echo '1111';die;
		$file = Request::instance()->file('file');
		$info = $file->move('upload');
		print_r($info);
	}

}