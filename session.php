<?php include'conndb.php'?>
<?php
 $result=mysql_query($sql,$db_link);
  session_start;
  if($v1=mysql_fetch_array($result)){
$_SESSION['sname']=$v1["uname"];
$_SESSION['sid']=$v1["uid"];
echo "success";
}else{
echo "false";
}
}

?>