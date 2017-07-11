<?php include'conndb.php'?>
<?php
header("Content-type:text/html;charset=utf-8");
$sql="select * from p_order";
mysql_query("SET NAMES UTF8");
$result=mysql_query($sql,$db_link);
$arr2=array();
 while( $v1=mysql_fetch_array($result)){
       $arr1=array('aid'=>$v1['pid'],'auid'=> $v1['uid'],'anum'=>$v1['num'],'aodate'=>$v1['odate']);
       array_push($arr2,$arr1);
     }
echo json_encode($arr2);
?>



