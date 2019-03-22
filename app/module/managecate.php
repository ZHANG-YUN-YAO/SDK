<?php
class  managecate extends main{
    function __construct()
    {
        parent::__construct();
//        获取数据
        session_start();
        $this->info = $_SESSION['info'];
    }
    function init(){
//      定义一个变量
      $this->smarty->assign('info',$this->info);
//      展示页面
      $this->smarty->display('managecate.html');
    }
    function insert(){
        $db = new DB('category');
        $obj = new Menu();
        $str = $obj->getCate($db->mysql,'category',0,0);
//        挂载到页面中去
        $this->smarty->assign('info',$this->info);
        $this->smarty->assign('str',$str);

        $this->smarty->display('insertcate.html');
    }
    function insert1(){
        $db=new DB('category');
        $data=$_GET;
        $sql="insert into category(pid,title,thumb) VALUES ('{$data['pid']}','{$data['title']}','{$data['thumb']}')";
        $rows=$db->insert($sql);

        if($rows==1){
            echo json_encode(['code'=>0,'msg'=>'栏目插入成功']);
        }else{
            echo json_encode(['code'=>1,'msg'=>'栏目插入失败']);
        }
    }
    function query(){
        $page=$_GET['page'];
        $limit=$_GET['limit'];

        $offset=($page-1)*$limit;
        $db=new DB('category');


//        获取其长度

        $data=$_GET;
//      1  过滤掉空的条件  去空
        $data=array_filter($data);
//      2  去掉page  和 limit
        unset($data['page']);
        unset($data['limit']);
//        var_dump($data);
        if(!count($data)){
            $wheresql='';

        }else{
            $wheresql='where';
            foreach($data as $key=>$v){
                $wheresql .=" $key='$v' and";

            }
            $wheresql=substr($wheresql,0,-3);

        }
//              获取数量
        $count=  $db->mysql->query("SELECT * FROM category $wheresql")->fetch_all(MYSQLI_ASSOC);
//            获取数据
        $sql="SELECT * FROM category $wheresql order by id asc limit $offset,$limit ";
        $result=$db->mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
//        一部分sql语句
//        $result=$db->query("title,pid");
        //完整sql语句
//        $result=$db->query($sql);

//        $sql="SELECT * FROM category";
//        $id=$_GET['id'];
//        $result=$db->where("id=$id")->query("title,pid,id,thumb");

//        获取对应的数据
        $data=[];
        $data['code']=0;
        $data['msg']='数据获取成功';
        $data['count']=count($count);
        $data['data']=$result;
        echo json_encode($data);
    }
    function delete(){
        $id=$_GET['id'];
        $db=new DB('category');
        //1. sql语句删除
        $sql="delete from $db->tablename where id=$id";
//        $db->delete($sql);
//        $rows=$db->delete("id=$id");
        $rows=$db->delete($sql);
//        2.  给一个条件，删除
//        $rows=$db->delete("id=$id");
        if($rows == 1){
            echo json_encode(['code'=>0,'msg'=>'删除成功']);
        }else{
            echo json_encode(['code'=>1,'msg'=>'删除失败']);
        }

    }
    function edit(){

        $db = new DB('category');
        $obj = new Menu();
        $str = $obj->getCate($db->mysql, 'category', 0, 0);
//把数据读回来
        $id=$_GET['id'];
        $sql="SELECT * FROM  category where id=$id";
        $result=$db->mysql->query($sql)->fetch_assoc();

//   挂载到页面中去     ‘变量’   值
        $this->smarty->assign('info',$this->info);
        $this->smarty->assign('str',$str);
        $this->smarty->assign('id',$id);
        $this->smarty->assign('information', $result);
        $this->smarty->display('editcate.html');
    }

    function edit1(){
        $db = new DB('category');
        $data = $_GET;
        $title=$_GET['title'];
        $pid=$_GET['pid'];
        $thumb=$_GET['thumb'];
        $id=$_GET['id'];
//        var_dump($id);
        $sql = "update category set pid='$pid', title='$title', thumb='$thumb'  where id='$id'";
//        var_dump($sql);
//        exit();
        $db->mysql->query($sql);
        $rows =  $db->mysql->affected_rows;
        if ($rows == 1) {
            echo json_encode(['code' => 0, 'msg' => '栏目修改成功']);
        } else {
            echo json_encode(['code' => 1, 'msg' => '栏目修改失败']);
        }
    }
}