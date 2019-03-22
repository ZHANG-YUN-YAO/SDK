<?php
class managegoods extends main
{
    function __construct()
    {
        parent::__construct();
        session_start();
        $this->info=$_SESSION['info'];
    }
    function init(){

        $db = new DB('shop');
        $sql = "select * from shop";
        $type = $db->mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
        $this->smarty->assign('str',$type);
        $sql2="select gid,title from goodstype where cid={$type[0]['sid']}";
        $result2=$db->mysql->query($sql2)->fetch_all(MYSQLI_ASSOC);
        $this->smarty->assign('str2',$result2);

        $this->smarty->assign('info', $this->info) ;
        $this->smarty->display('insertgoods.html');
    }
    function goodstype(){
        $cid=$_GET['cid'];
        $db = new DB('goodstype');
        $sql2="select * from goodstype where cid=$cid";
        $result2=$db->mysql->query($sql2)->fetch_all(MYSQLI_ASSOC);
//        $this->smarty->assign('str2',$result2);
        echo json_encode($result2);
    }

    function insert1(){

        $data=$_POST;
        $db=new DB('goods');

        $nid=$data['nid'];
        $cid=$data['cid'];
        $title=$data['title'];
        $thumb=$data['thumb'];
        $des=$data['des'];
        $discount=$data['discount'];
        $price=$data['price'];

        $sql="insert into goods (title,thumb,des,discount,price,cid,nid) VALUES ('{$data['title']}','{$data['thumb']}','{$data['des']}','{$data['discount']}','{$data['price']}','{$data['cid']}','{$data['nid']}')";
        $rows=$db->insert($sql);
        if($rows==1){
            echo json_encode(['code'=>0,'msg'=>'商品插入成功']);
        }else{
            echo json_encode(['code'=>1,'msg'=>'商品插入失败']);
        }
    }
    function query(){
        $this->smarty->assign('info',$this->info);
        $this->smarty->display('managegoods.html');
    }
    function query1(){
        $data=$_GET;
        $db=new DB('goods');
//        $id=$_GET['id'];
//        $sql="SELECT goods.title ,goodstype.title  from goods,goodstype";
        $sql="SELECT * from goods" ;
        $result=$db->mysql->query($sql)->fetch_all(MYSQLI_ASSOC);

        $data['code']=0;
        $data['data']=$result;
        $data['msg']='数据获取成功';
        $data['count']=count($result);
        echo json_encode($data);
    }

    function edit(){
        $db = new DB('goodstype');
//把数据读回来
        $id = $_GET['id'];
        $sid=$_GET['sid'];
        $dbg = new DB('goods');

        $sql1 = "select * from goods where id=$id";
        $res=$db->mysql->query($sql1)->fetch_assoc();

        $sql2 = "select * from shop";
        $res2=$db->mysql->query($sql2)->fetch_all(MYSQLI_ASSOC);

        $sql3 = "select * from goodstype WHERE cid=$sid";

        $res3=$db->mysql->query($sql3)->fetch_all(MYSQLI_ASSOC);

//   挂载到页面中去     ‘变量’   值
        $this->smarty->assign('res', $res);
        $this->smarty->assign('res2', $res2);
        $this->smarty->assign('res3', $res3);

        $this->smarty->assign('info',$this->info);
        $this->smarty->display('editgoods.html');
    }
    function edit1(){
        $data = $_GET;
        $db = new DB('goods');
//        var_dump($data);
//        exit();
        $id=$data['id'];
        $title=$data['title'];
        $des=$data['des'];
        $discount=$data['discount'];
        $price=$data['price'];
        $thumb=$data['thumb'];
        $sql = "update goods set title='$title',des='$des', discount='$discount', price='$price',thumb='$thumb' where id=$id ";

        $db->mysql->query($sql);
        $rows =  $db->mysql->affected_rows;
        if ($rows == 1) {
            echo json_encode(['code' => 0, 'msg' => '商品修改成功']);
        } else {
            echo json_encode(['code' => 1, 'msg' => '商品修改失败']);
        }
    }
   function delete(){
        $id=$_GET['id'];
        $db=new DB('goods');
        $sql="delete FROM goods where id=$id";
        $rows=$db->mysql->query($sql);
        if($rows == 1){
            echo json_encode(['code'=>0,'msg'=>'删除成功']);
        }else{
            echo json_encode(['code'=>1,'msg'=>'删除失败']);
        }
    }
    //删除多行
     function deletes(){
        $id=$_GET['id'];
        $db=new DB('goods');
        $sql="DELETE FROM goods where id in ($id)";
        $rows=$db->mysql->query($sql);
        if($rows >= 1){
            echo json_encode(['code'=>0,'msg'=>'删除成功']);
        }else{
            echo json_encode(['code'=>1,'msg'=>'删除失败']);
        }

    }
}