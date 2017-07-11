

<?php
       $db_link= mysql_connect("localhost","root","admin")or die("数据库服务器连接失败!".mysql_error());
       $db=mysql_select_db("666",$db_link);
         header("Content-type:text/html;charset=utf-8");
         $tid=$_REQUEST["typeid"];
//多表查询里面的别名  a.pname p1   b.tname t1    t_type a      a是别名(小名)
//         $sql="select a.pname p1,b.tname t1 from t_type a,t_product b where a.tid=b.tid and a.tid=1";
       $sql="select * from product where tid=$tid";
         mysql_query("SET NAMES UTF8");

         $result=mysql_query($sql,$db_link);
//            $v1["p1"]


$arr2=array();
 while( $v1=mysql_fetch_array($result)){
       $arr1=array('pid'=>$v1['pid'],'pname'=> $v1['pname'],'price'=>$v1['price'],'pimage'=>$v1['pimage']);
       array_push($arr2,$arr1);
     }
echo json_encode($arr2);

?>