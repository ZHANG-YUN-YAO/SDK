<?php
//创建对象
class Menu{
//    私有的 protected ;

//    公共的
    public $str;
    function _construct(){
        $this->str='';
    }
    /*获取数据库
     * $mysql
    $tablename   表明
    $parentid  0
    $flag  标识栏目层级
    */
//        对应上一级栏目列表下的<option>

    //(操作数据库，操作的表，操作的栏目范围，标识是 第几集栏目)
    function getCate($mysql,$tablename,$parentid,$flag,$currentid=null){
//        存储父栏目id
        $pid  = null;
        if($currentid){
            $arr=$mysql->query("select * from $tablename where id=$currentid")->fetch_assoc();
            $pid = $arr ['pid'];
        }

        $sql  ="select * from $tablename where pid=$parentid";
        $result = $mysql->query($sql);
//       加标识
        $flag++;
        /*只转换结果集中的第一条
        $row =$result->fetch_assoc();*/
//       row对应一个栏目  row对应的栏目下的相应的option
        while ($row = $result->fetch_assoc()){
//           str_repeat（）函数吧字符串重复指定的次数（flag次）
            $str = str_repeat('-',$flag);
//           判断当前栏目的id等于pid
            if($row['id']==$pid){
                $this->str .="<option selected value={$row['id']}> {$str} {$row['title']} </option>";
            }else{
                $this->str .="<option value={$row['id']}> {$str} {$row['title']} </option>";
            }

//            第几级栏目下自己的子id=pid
            $this->getCate($mysql,$tablename,$row['id'],$flag);
        }
        return $this->str;
    }
}
