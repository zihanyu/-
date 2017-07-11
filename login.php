<?php include'conndb.php'?>
  <?php
  header("Content-type:text/html;charset=utf-8");
  $v_uname=$_REQUEST["user"];
  $v_upwd=$_REQUEST["pwd"];
  $sql="select * from yh where uname='$v_uname' and upwd='$v_upwd'";
  mysql_query("SET NAMES UTF8");
  $result=mysql_query($sql,$db_link);
  $v_result=mysql_fetch_row($result);
  if(!empty($v_result)){
  echo "success";
  }else{
  echo "fault";
  }
  ?>