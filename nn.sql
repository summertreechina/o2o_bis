# 生活服务分类表
CREATE TABLE `o2o_category` (
	`id` int(11) unsigned NOT NULL auto_increment,
	`name` VARCHAR(50) NOT NULL DEFAULT '',
	`parent_id` int(10) unsigned NOT NULL default 0,
	`list_order` int(8) unsigned NOT NULL default 0,
	`status` tinyint(1) NOT NULL default 0,
	`create_time` int(11) unsigned NOT NULL default 0,
	`update_time` int(11) unsigned NOT NULL default 0,
	PRIMARY KEY (`id`),
	KEY parent_id(`parent_id`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


# 城市表
CREATE TABLE `o2o_city` (
	`id` int(11) unsigned NOT NULL auto_increment,
	`name` VARCHAR(50) NOT NULL DEFAULT '',
	`ename` VARCHAR(50) NOT NULL DEFAULT '',
	`parent_id` int(10) unsigned NOT NULL default 0,
	`list_order` int(8) unsigned NOT NULL default 0,
	`status` tinyint(1) NOT NULL default 0,
	`create_time` int(11) unsigned NOT NULL default 0,
	`update_time` int(11) unsigned NOT NULL default 0,
	PRIMARY KEY (`id`),
	KEY parent_id(`parent_id`),
	UNIQUE KEY ename(`ename`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


# 商圈表
CREATE TABLE `o2o_area` (
	`id` int(11) unsigned NOT NULL auto_increment,
	`name` VARCHAR(50) NOT NULL DEFAULT '',
	`city_id` int(11) unsigned NOT NULL default 0,
	`parent_id` int(10) unsigned NOT NULL default 0,
	`list_order` int(8) unsigned NOT NULL default 0,
	`status` tinyint(1) NOT NULL default 0,
	`create_time` int(11) unsigned NOT NULL default 0,
	`update_time` int(11) unsigned NOT NULL default 0,
	PRIMARY KEY (`id`),
	KEY parent_id(`parent_id`),
	KEY city_id(`city_id`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


# 商户表
CREATE TABLE `o2o_bis` (
	`id` int(11) unsigned NOT NULL auto_increment,
	`name` CHAR(50) NOT NULL DEFAULT '',
	`email` VARCHAR(50) NOT NULL DEFAULT '',
	`logo` VARCHAR(255) NOT NULL DEFAULT '',
	`license_logo` VARCHAR(255) NOT NULL DEFAULT '',
	`description` text NOT NULL,
	`city_id` int(11) unsigned NOT NULL default 0,
	`city_path` VARCHAR(50) NOT NULL DEFAULT '',
	`bank_info` VARCHAR(50) NOT NULL DEFAULT '',
	`money` DECIMAL(20, 2) NOT NULL DEFAULT '0.00',
	`bank_name` VARCHAR(50) NOT NULL DEFAULT '',
	`bank_user` VARCHAR(50) NOT NULL DEFAULT '',
	`faren` VARCHAR(20) NOT NULL DEFAULT '',
	`faren_tel` VARCHAR(20) NOT NULL DEFAULT '',
	`list_order` int(8) unsigned NOT NULL default 0,
	`status` tinyint(1) NOT NULL default 0,
	`create_time` int(11) unsigned NOT NULL default 0,
	`update_time` int(11) unsigned NOT NULL default 0,
	PRIMARY KEY (`id`),
	KEY city_id(`city_id`)
	KEY name(`name`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
























