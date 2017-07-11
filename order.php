<?php include 'conndb.php'?>
<?php
header("Content-type:text/html;charset=utf-8");
$v_pid=$_REQUEST["pid"];
$v_uid=$_REQUEST["uid"];
$v_num=$_REQUEST["num"];
$v_date=date("Y-m-d h:i:s");
$sql="insert into p_order(pid,uid,num,odate) values('$v_pid','$v_uid','$v_num','$v_date')";
$result=mysql_query($sql,$db_link) or die(mysql_error());
session_start();
if(!empty($result)){
     echo "购买成功";
       $_SESSION["sid"]= $v1['uid'];

}else{
     echo "购买失败";
};
?>