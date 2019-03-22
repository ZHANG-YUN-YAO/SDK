<?php
//MVC架构：模型（数据）   视图     控制器
//路由（充当控制器）：  分发请求到不同模块实现对应 功能
//单一入口
//           /    /        /模块      /方法
//localhost/sdk/index.php/adminlogin/login登录
//localhost/sdk/index.php/adminlogin/register注册
//localhost/sdk/index.php/manger/query查看

//逐步判断文件   类    方法是否存在localhost/sdk/index.php/adminlogin/login
//如果存在
class Router{
//    获取地址中对应的模块和方法
    static function init(){
//    var_dump($_SERVER['PATH_INFO']);
//      1 PATH_INFO'有值
        if(!isset($_SERVER['PATH_INFO'])||$_SERVER['PATH_INFO']=='/'){
            $module='index';
            $method='init';
        }else{
//       2 PATH_INFO'有值
//            截取后面的
            $str=substr($_SERVER['PATH_INFO'],1);
//            将字符串打散
            $arr=explode('/',$str);
            $module=$arr[0];
            $method=isset($arr[1]) && $arr[1]?$arr[1]: 'init';

        }


//        判断文件是否存在
        if(file_exists('app/module/'.$module.'.php')){
//            文件存在就引进来
                include_once 'app/module/'.$module.'.php';
//      判断类是否存在
            if (class_exists($module)){
//              类存在实例化这个类
                $obj = new $module();
//                var_dump($obj);
//                exit();
//            判断方法是否存在
                if(method_exists($obj,$method)){
//                    找到模块下对应的方法，实现功能
                    $obj->$method();
                }else{
                    echo $method.'方法不存在';
                }
            }else{
                echo $module.'类不存在';
            }
        }else{
            echo $module.'.php文件不存在';
        }
    }
}