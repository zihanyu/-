
<?php include'conndb.php'?>
<?php
header("Content-type:text/html;charset=utf-8");
$v_name=$_GET['inpname'];
$v_pwd=$_GET['inppwd'];
$v_email=$_GET['inpemail'];
$sql="insert into yh(uname,upwd,uemail) values('$v_name','$v_pwd','$v_email')";
$result=mysql_query($sql,$db_link);
if(!empty($result)){
echo "注册成功！正在跳转<a href='login.html'>登录</a>页面...如果跳转失败，请手动点击<a href='login.html'>登录</a> >>>";

}else{
echo "注册失败！";
}
?>