`3-3 TP5神器-webserver-`
	* 创建并启动服务器
		启动： `php -S localhost:3333 router.php`
			进阶： `nohup php -S localhost:3333 router.php &`
				-- nohup 不挂断
				-- & 后台进程
		查看进程： `ps aux | grep 3333`
		访问： `http://localhost:3333`
		终止： `Press Ctrl-C to quit`

	* 从终端创建控制器
		`php think make:controller index/Test`
			在项目根目录下
			index/Test 模块/控制器

	* 从终端创建文件夹、模块、控制器等
		1、将项目根目录中的build文件cp到app文件夹中
		2、编辑build文件
		3、在项目根目录中运行 `php think build`
		4、返回 `php think build` 即成功创建