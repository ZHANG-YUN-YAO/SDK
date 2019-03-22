<?php
header('Content-type:text/html;charset=UTF-8');
//唯一入口 定义变量 全局路径


//
define('CSS_PATH','/sdk/static/css/');
define('JS_PATH','/sdk/static/js/');
define('LAYUIJS_PATH','/sdk/static/');
define('IMAGE_PATH','/sdk/static/images/');
define('FONT_PATH',__DIR__.'/public/msyh.ttf');

//实现路由
require_once 'public/Router.php';
require_once 'public/libs/Smarty.class.php';
require_once 'public/main.php';
require_once 'public/db.php';
require_once 'public/function.php';
require_once 'public/code.php';
//外部调用静态类
Router::init();