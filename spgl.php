<?php include'conndb.php'?>
<?php
header("Content-type:text/html;charset=utf-8");
$sql="select * from product";
mysql_query("SET NAMES UTF8");
$result=mysql_query($sql,$db_link);
$arr2=array();
 while( $v1=mysql_fetch_array($result)){
       $arr1=array('aid'=>$v1['pid'],'aname'=> $v1['pname'],'aprice'=>$v1['price'],'acontent'=>$v1['content'],'apimage'=>$v1['pimage'],'atid'=>$v1['tid']);
       array_push($arr2,$arr1);
     }
echo json_encode($arr2);
?>



