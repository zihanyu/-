<?php include'conndb.php'?>
<?php
header("Content-type:text/html;charset=utf-8");
$vdelid=$_GET['vdelid'];
$sql="delete from p_order where pid=$vdelid";
$result=mysql_query($sql,$db_link);
if(!empty($result)){
echo "success";
}else{
echo "false";
}
?>