<?php
class food extends main
{
    function __construct()
    {
        parent::__construct();
        session_start();
    }
    function init()
    {
        $id=$_GET['id'];
        $db = new DB('category');
        $sql2="select * from category where id=$id ";
        $currentcate=$db->mysql->query($sql2)->fetch_assoc();

        $sql = "select * from category where pid=$id order by id asc ";
        $soncate = $db->mysql->query($sql)->fetch_all(MYSQLI_ASSOC);

        $this->smarty->assign('soncate', $soncate);
        $this->smarty->assign('currentcate', $currentcate);
        $this->smarty->display('cate.html');
    }

    function lists(){
        $lists=$_GET;
        $id=$_GET['id'];
        $cid=$_GET['cid'];
        $page=$_GET['page'];
        $limit=$_GET['limit'];
        $order=$_GET['order'];
        $offset=($page-1)*$limit;
        if($cid){

            $db = new DB('shop');
            $sql="select * from shop where cid=$cid order by $order desc limit $offset,$limit ";
            $result=$db->mysql->query($sql)->fetch_all(MYSQLI_ASSOC);


            $sql="select * from shop where cid=$cid";
            $data=$db->mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
            $pages=ceil(count($data)/$limit);
            echo json_encode(['res'=>$result,'pages'=>$pages]);

        }else{
            $db = new DB('category');
            $sql2="select id from category where pid=$id ";

            $result2=$db->mysql->query($sql2)->fetch_all(MYSQLI_ASSOC);
                $str= '(';
                    foreach($result2 as $va){
                        $str .="{$va['id']},"   ;
                    }
                $str=substr($str,0,-1).')';
            $res=$db->mysql->query("select * from shop where cid in $str order by $order desc  limit $offset,$limit")->fetch_all(MYSQLI_ASSOC);

            $data=$db->mysql->query("select * from shop where cid in $str" )->fetch_all(MYSQLI_ASSOC);
            $pages=ceil(count($data)/$limit);

            echo json_encode(['res'=>$res,'pages'=>$pages]);
        }
    }
}