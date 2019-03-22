<?php
class my extends main{
    function __construct()
    {
        parent::__construct();
    }
    //登录
    function init(){
        $db=new DB('users');
        $this->smarty->display('denglu.html');
    }
    function initcheck()
    {
        $data = $_POST;
        $phone = $data['phone'];
        $password = $data['password'];
        $code=$data['code'];
        session_start();
        $_SESSION['code'];
        $db = new DB('users');
        if ( $code==$_SESSION['code']) {
            $sql = "select * from  users  where  phone='$phone' ";
            $rows = $db->mysql->query($sql)->fetch_all(MYSQLI_ASSOC);

            if(count($rows) > 0 ){
                if($password== $rows[0]['password']){
                    $_SESSION['login']='yes';
                    $_SESSION['uid']=$rows[0]['id'];

                    echo json_encode(['code' => 0, 'msg' => ' 登录成功']);
                }else{
                    echo json_encode(['code' => 1, 'msg' => ' 密码错误']);
                }
            }else{
                echo json_encode(['code' => 1, 'msg' => '手机号未注册 ']);
            }
        } else {
            echo json_encode(['code' => 1, 'msg' => '验证失败 ']);

        }

        //获取验证码，判断正误，手机号是否存在，密码是否正确，如果过登陆成功，存储成功标识   id存到session

    }
    function code(){
        //code存到session  result
        session_start();
        $code=new code();
        $code->output();
        $_SESSION['code']= $code->result;
//

    }
    //注册
    function register(){
        $this->smarty->display('registeruser.html');

    }
    function registercheck(){
        $data=$_POST;

        unset($data['password1']);
//        $data['password1']=md5($data['password1']);
        $db=new DB('users');
        $rows=$db->insert($data);
       if($rows==1){
           echo json_encode(['code'=>0,'msg'=>'注册成功']);
       }else{
           echo json_encode(['code'=>1,'msg'=>'注册失败 ']);
       }
    }
    function checkusername(){
        $data = $_POST;
        $phone = $data['phone'];
        $db = new DB('users');
        $sql = "select * from  users  where  phone='$phone'";
        $rows = $db->mysql->query($sql)->fetch_assoc();
        if (count($rows) > 0) {
            echo 'false';

        } else {
            echo 'true';
        }
    }


}