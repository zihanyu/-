<?php include 'conndb.php'?>
<?php
header("Content-type:text/html;charset=utf-8");
$v_uname=$_REQUEST["uname"];
$v_upwd=$_REQUEST["upwd"];
$sql="select * from yh where uname='$v_uname' and upwd='$v_upwd'";
$result=mysql_query($sql,$db_link);
session_start();
if($v1=mysql_fetch_array($result)){
   echo "success";
  $_SESSION["sid"]= $v1['uid'];
  $_SESSION["sname"]= $v1['uname'];
}else{
  echo "false";
}
?>
