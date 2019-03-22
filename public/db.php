<?php
class DB{
    public $mysql;
    public $tablename;
//    构造函数
    function __construct($tablename)
    {
        $this->tablename=$tablename;
//        调用函数在数据库里运行config
        $this->config();
    }
//    给mysql初始化
    function config(){
//    连接数据库
        $this->mysql = new mysqli("localhost",'root','','sdk',3306);
//状态码
        if($this->mysql-> connect_error){
            echo "数据库连接失败，失败原因是".$this->mysql->connect_error;
//  退出后的代码不再执行

        }
// 查询字符集

        $this->mysql ->query('set names utf8');
    }
    function insert($data){
//        array  str
//        判断是数组还是一个字符
        if(is_string($data)) {
            //  $sql="INSERT into category (";
//            $keys = array_keys($data);
            $this->mysql->query($data);
        }else if(is_array($data)){
            $sql="INSERT INTO $this->tablename(";
            $keys=array_keys($data);
            for ($i=0;$i<count($keys);$i++){
                    $sql .=$keys[$i].',';
                }
        $sql=substr($sql,0,-1).') values(';
                foreach($data as $v){
            $sql.="'$v',";
        }
        $sql=substr($sql,0,-1).')';
         $this->mysql->query($sql);
        }
        return $this->mysql->affected_rows;
    }
//    function update($str){
//
//    }


    function delete($sql){
        $sql=$sql;
//        判断是否含有某个字符串
        if(strpos($sql,'elete')){
            $this->mysql->query($sql);
        }else{
            $sql="DELETE  FROM $this->tablename  where " .$sql;
            $this->mysql->query($sql);
        }
            return $this->mysql->affected_rows;
    }
    function query($str){
          if(is_string($str)&&strpos($str,'elect')){
              $sql=$str;
          }else{
              $sql='';
          }
    }
//    function where(){}
}

