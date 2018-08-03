<?php
/**
 * Created by PhpStorm.
 * User: Micosoft
 * Date: 2018/7/31 0031
 * Time: 23:18
 */

// [ 应用入口文件 ]

// 定义应用目录
define('APP_PATH', __DIR__ . '/../application/');
// 调试模式
define('APP_DEBUG', true);

define('BIND_MODULE', 'admin/login');
// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';
