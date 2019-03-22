<?php
class index extends main
{
    function __construct()
    {
        parent::__construct();
        session_start();
    }
    function init(){
        $db=new DB('category');
        $sql="select * from category where pid=0";
        $cate=$db->mysql->query($sql)->fetch_all(MYSQLI_ASSOC);

       $number= ceil(count($cate)/8);

       $this->smarty->assign('number',$number-1);
       $this->smarty->assign('cate',$cate);
       $this->smarty->display('index.html');
    }
    function index(){
        $db=new DB('shop');
        $sql="select * from shop ";
        $cate=$db->mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
//        var_dump($cate);
//        exit();
        echo json_encode($cate);
    }

}