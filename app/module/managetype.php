<?php
//管理店铺商品分类
class managetype extends main
{
    function __construct()
    {
        parent::__construct();
        session_start();
        $this->info = $_SESSION['info'];
    }

    function init()
    {
        $db = new DB('shop');
        $sql="select * from shop WHERE sid and sname";
        $show = $db->mysql->query($sql);
        $this->smarty->assign('show', $show);
        $this->smarty->assign('info', $this->info);
        $this->smarty->display('insertgtype.html');
    }


    function insert1()
    {
        $db = new DB('goodstype');
        $data = $_POST;
//        exit();
        $gid=$_POST['gid'];
        $title=$_POST['title'];
        $sql = "insert into goodstype(title,gid) VALUES ('{$gid}','{$title}')";
        $rows=$db->mysql->query($sql);
//        $rows = $db->insert($_POST);
        if ($rows == 1) {
            echo json_encode(['code' => 0, 'msg' => '插入成功']);
        } else {
            echo json_encode(['code' => 1, 'msg' => '插入失败']);
        }
    }
    function query(){
        $this->smarty->assign('info',$this->info);
        $this->smarty->display('managetype.html');
    }
    function query1(){

       $db=new DB('goodstype');
       $sql="SELECT shop.sname ,goodstype.*  from shop,goodstype";
       $result=$db->mysql->query($sql)->fetch_all(MYSQLI_ASSOC);

       $data['code']=0;
       $data['data']=$result;
       $data['msg']='数据获取成功';
       $data['count']=count($result);
       echo json_encode($data);
    }
    function update(){
        $data=$_POST;
        $gid=$data['gid'];
        $title=$data['title'];
        $value=$data['value'];
        $sql="UPDATE goodstype SET  $title='$value' where  gid=$gid";
        $db=new DB('goodstype');
       $rows= $db->mysql->query($sql);

        $rows= $db->mysql->affected_rows;
            if ($rows == 1) {
                echo json_encode(['code' => 0, 'msg' => '分类修改成功']);
            } else {
                echo json_encode(['code' => 1, 'msg' => '分类修改失败']);
            }

    }
}