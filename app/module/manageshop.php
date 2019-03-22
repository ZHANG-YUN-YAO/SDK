<?php
//管理店铺
class  manageshop extends main
{
    function __construct()
    {
        parent::__construct();
        session_start();
        $this->info = $_SESSION['info'];
    }
    //展示店铺页面
    function init(){
        $this->smarty->assign('info',$this->info);
        $this->smarty->display('insertshop.html');
    }
    function insert(){
        $db = new DB('shop');
//        挂载到页面中去
        $this->smarty->assign('info',$this->info);
//        添加到二级分类
        $sql="select * from category where pid!=0";
//        挂载到页面
        $result=$db->mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
        $this->smarty->assign('str',$result);
        //展示页面
        $this->smarty->display('insertshop.html');
    }
    function insert1(){
        $db=new DB('shop');
        $data=$_POST;

        $sql="insert into shop(cid,sname,sthumb,notice,fee,view,slogan,stype,phone) VALUES ('{$data['cid']}','{$data['sname']}','{$data['sthumb']}','{$data['notice']}','{$data['fee']}','{$data['view']}','{$data['slogan']}','{$data['stype']}','{$data['phone']}')";
//        var_dump($sql);
        $rows=$db->insert($sql);
        if($rows==1){
            echo json_encode(['code'=>0,'msg'=>'店铺插入成功']);
        }else{
            echo json_encode(['code'=>1,'msg'=>'店铺插入失败']);
        }
    }
    function delete(){
        $sid=$_GET['sid'];
        $db=new DB('shop');

        $sql="DELETE FROM shop where sid=$sid";

        $rows=$db->mysql->query($sql);
        if($rows == 1){
            echo json_encode(['code'=>0,'msg'=>'删除成功']);
        }else{
            echo json_encode(['code'=>1,'msg'=>'删除失败']);
        }
    }
    //删除多行
    function deletes(){
        $sid=$_GET['sid'];
        $db=new DB('shop');
        $sql="DELETE FROM shop where sid in ($sid)";

        $rows=$db->mysql->query($sql);
        if($rows >= 1){
            echo json_encode(['code'=>0,'msg'=>'删除成功']);
        }else{
            echo json_encode(['code'=>1,'msg'=>'删除失败']);
        }

    }
    function query(){
        $this->smarty->assign('info',$this->info);
        $this->smarty->display('manageshop.html');
    }
    function query1(){
        $page=$_GET['page'];
        $limit=$_GET['limit'];
        $offset=($page-1)*$limit;
        $order=isset($_GET['order'])?$_GET['order']:'desc';
        $field=isset($_GET['field'])?$_GET['field']:'sid';
        $db=new DB('shop');
//        获取其长度
        $data=$_GET;
        $data=array_filter($data);// 1  过滤掉空的条件  去空
        unset($data['page']);    // 2  去掉page  和 limit
        unset($data['limit']);
        unset($data['field']);
        unset($data['order']);
//        var_dump($data);
        if(!count($data)){
            $wheresql='';
        }else{
            $wheresql=' where ';
            foreach($data as $key=>$v){
                $wheresql .=" $key='$v' and";
            }
            $wheresql=substr($wheresql,0,-3);
        }
//      获取数量
        $sql="SELECT * FROM shop $wheresql";
        $count=  $db->mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
//       获取数据limit(截取下标，长度)
        $sql="SELECT * FROM shop $wheresql order by $field $order limit $offset,$limit ";
        $result=$db->mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
/*
        一部分sql语句
        $result=$db->query("title,pid");
        完整sql语句
        $result=$db->query($sql);

        $sql="SELECT * FROM category";
        $id=$_GET['id'];
        $result=$db->where("id=$id")->query("title,pid,id,thumb");*/

//        获取对应的数据
        $data=[];
        $data['code']=0;
        $data['msg']='数据获取成功';
        $data['count']=count($count);
        $data['data']=$result;
        echo json_encode($data);
    }

    function edit(){
        $db = new DB('shop');

//把数据读回来
        $sid=$_GET['sid'];
        $sql="SELECT * FROM  shop where sid=$sid";
        $result=$db->mysql->query($sql)->fetch_assoc();
        $sql1="SELECT * FROM category where pid!=0";
        $result2=$db->mysql->query($sql1)->fetch_all(MYSQLI_ASSOC);
        $view=$result['view'];

        $this->smarty->assign("view",explode(",",$view));

//   挂载到页面中去     ‘变量’   值
        $this->smarty->assign('info',$this->info);
        $this->smarty->assign('sid',$sid);
        $this->smarty->assign('information', $result);
        $this->smarty->assign('information2', $result2);
        $this->smarty->display('editshop.html');
    }

    function edit1(){
        $db = new DB('shop');
        $data = $_GET;
        $sname=$_GET['sname'];
        $cid=$_GET['cid'];
        $sthumb=$_GET['sthumb'];
        $view=$_GET['view'];
        $sid=$_GET['sid'];
//        $notice=$_GET['notice'];
//        $slogan=$_GET['slogan'];
        $fee=$_GET['fee'];
//        $stype=$_GET['stype'];

//        var_dump($id);
        $sql = "update shop set view='$view', cid='$cid',fee='$fee', sname='$sname', sthumb='$sthumb'  where sid='$sid'";


        $db->mysql->query($sql);
        $rows =  $db->mysql->affected_rows;
        if ($rows == 1) {
            echo json_encode(['code' => 0, 'msg' => '栏目修改成功']);
        } else {
            echo json_encode(['code' => 1, 'msg' => '栏目修改失败']);
        }
    }

}