<?php
//登录验证注册
//继承main
class  adminlogin extends main{
    function __construct()
    {
//        运行了父类的construct
        parent::__construct();
    }
    function login(){
//        $this->smarty->assign('name','zhangsan');
//        显示模板展开页面
       $this->smarty->display('adminlogin.html');
    }
    function check (){
        //    连接数据库
        $mysql = new mysqli("localhost",'root','','sdk',3306);

        if($mysql-> connect_errno){
            echo "数据库连接失败，失败原因是".$mysql->connect_errno;
//  退出后的代码不再执行
            exit();
        }

// 查询字符集
        header('Content-Type:text/html;charset=utf-8');
        $mysql ->query('set names utf8');

        $username=$_GET['username'];
//        $password=md5($_GET['password']);密码加密
        $password=($_GET['password']);
//        $this->smarty->display('register.html');
        $sql="SELECT * from manage where username='$username' and password='$password'";
        $result=$mysql->query($sql)->fetch_assoc();
//        var_dump($result);
        if($result){

//           将用户的id 存到session
            session_start();
            $_SESSION['info'] = $result;
//            $_SESSION['uid']=$result;

            echo 'ok';
        }else{
            echo 'no';
        }
    }

}