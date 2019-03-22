<?php
class dpxq extends main{
    function __construct()
    {
        parent::__construct();
    }
    function init(){
        $sid=$_GET['id'];
        $db = new DB('shop');
        $sql="select * from shop where sid=$sid ";
        $row=$db->mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
        $this->smarty->assign('shop', $row[0]);
        $this->smarty->display('dpxq.html');
    }
    function detail(){
//        分类，标题
        $id=$_GET['sid'];//店铺id
        $db=new DB('goodstype');
        //  type 店铺d分类   (数组)
        $types=$db->mysql->query("select * from goodstype where cid=$id")->fetch_all(MYSQLI_ASSOC);

        //分类的id   gid
        $gid=array_map(function ($n){
            return $n['gid'];
        },$types);

        $abs=new DB('goods');
        $str=implode(',',$gid);

        $goods=$abs->mysql->query("select * from goods where cid in ($str)")->fetch_all(MYSQLI_ASSOC);

        $result=[];//最终数组
        for($i=0;$i<count($gid);$i++){
            $result[$i]=[];//result里面有good和title
            $result[$i]['title']=$types[$i]['title'];
            $result[$i]['goods']=[];
            for($j=0;$j<count($goods);$j++){
                if($goods[$j]['cid']==$gid[$i]){
                    array_push($result[$i]['goods'],$goods[$j]);
                }

            }
        }

        echo json_encode($result);
    }

    function car()
    {
        $result = $this->checklogin();
                    if (!$result) {
                echo json_encode([
                    'code' => 1,
                    'msg' => '请登录'
                ]);
                exit();

        } else {
        //订单
        $db = new DB('orders');
        $data = $_POST;
        unset($data['goods']);
        $data['uid'] = $_SESSION['uid'];
        $sql = " insert into orders (total,discount,numbers,fee,uid) values('{$data['total']}','{$data['discount']}',{$data['numbers']},{$data['fee']},{$data['uid']})";

        $rows = $db->mysql->query($sql);

        if ($rows) {
            $oid = $db->mysql->insert_id;
            $db = new DB('orderextra');
            $goods = $_POST['goods'];
            $keys=array_keys($goods[0]);
            array_push($keys,'oid');
            $str=implode(',',$keys);
            $sql="insert into orderextra (";
            $sql.=$str.') values ';
            $str='';
            for($i=0;$i<count($goods);$i++){
                $sql .="(";
                $goods[$i]['oid'] = $oid;

            foreach($goods[$i] as $v){
                $sql .="'$v',";
            }
            $sql =substr($sql,0,-1)."),";
            }
            $sql=substr($sql,0,-1);

            if( $db->mysql->query($sql)){
                echo json_encode([
                    'code'=>0,
                    'msg'=>'下单成功',
                     'oid' =>$oid ]);
            }
            else{
                echo json_encode([
                    'code'=>2,
                    'msg'=>'下单失败']);
            }
        }
        else{
            echo json_encode([
                'code'=>2,
                'msg'=>'下单失败']);
            }
        }
    }
    function orderconfirm(){
        $this->smarty->display('xiadan.html');
    }
    function orderdetail()
    {
        $oid = $_POST['oid'];
        $db = new DB('orderextra');
        $sql="select * from orderextra where oid=$oid";
        $result=$db->mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
        $db = new DB('shop');
        $sid=$result[0]['nid'];
        $sql="select * from shop where sid=$sid";
        $shop=$db->mysql->query($sql)->fetch_all(MYSQLI_ASSOC);

        $db=new DB('orders');
        $sql="select * from orders where oid=$oid";
        $goods=$db->mysql->query($sql)->fetch_all(MYSQLI_ASSOC);

        $res=[];
        $res['shopname']=$shop[0]['sname'];
        $res['goods']=$goods;
        $res['result']=$result;
        echo json_encode($res);
    }
    function pay(){
        $this->smarty->display('zfcg.html');
    }
    function payok(){
        $oid = $_POST['oid'];
        $db=new DB('orders');
        $sql="select * from orders where oid=$oid";
        $goods=$db->mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
        $res2=[];
        $res2['goods']=$goods;
        echo json_encode($res2);
    }
    function look(){
        $this->smarty->display('dingdan.html');
    }
    function lookorder(){
        $result = $this->checklogin();
        if (!$result) {
            echo json_encode([
                'code' => 1,
                'msg' => '请登录'
            ]);
            exit();
        } else {
            // 获取用户id  uid
            $uid=$_SESSION['uid'];
            $db= new DB('orders');
            $sql="select  * from orders where  uid=$uid";
            $result=$db->mysql->query($sql)->fetch_all(MYSQLI_ASSOC);//商品
            $arr1=[];
            $arr4=[];
            for($i=0;$i<count($result);$i++){
                $oid=$result[$i]['oid'];
                $info=$result[$i];
                array_push($arr1,$oid);
                array_push($arr4,$info);
            }

            $oid=implode(',',$arr1);
            $db=new DB('orderextra');
            $sql="select DISTINCT(oid),nid  from orderextra where oid in  ($oid)";

            $res1=$db->mysql->query($sql)->fetch_all(MYSQLI_ASSOC);//goods详情
            $arr2=[];
            for($i=0;$i<count($arr1);$i++){
                $nid=$res1[$i]['nid'];
                array_push($arr2,$nid);
            }

            $arr3=[];
            for($i=0;$i<count($arr2);$i++){
                $sid=$arr2[$i];
                $db=new DB('shop');
                $sql="select * from shop where sid=$sid";
                $res2=$db->mysql->query($sql)->fetch_assoc();//所属店铺
                array_push($arr3,$res2);
            }

            $res3=[];
            for($i=0;$i<count($arr3);$i++){
                $res3[$i]['shop']=$arr3[$i];
                $res3[$i]['orders']=$arr4[$i];
            }

            echo json_encode($res3);
        }

    }
    function wode(){
        $this->smarty->display('wode.html');
    }
    function wodeorder(){
        $result = $this->checklogin();
        if (!$result) {
            echo json_encode([
                'code' => 1,
                'msg' => '请登录'
            ]);
            exit();
        } else {
            $uid=$_SESSION['uid'];
            $db =new DB('users');

            $sql="select * from users where id=$uid";
          $res=  $db->mysql->query($sql)->fetch_all(MYSQLI_ASSOC);

            echo json_encode($res);

        }
    }
    function orderdetails(){
        $this->smarty->display('detail.html');
    }


}
