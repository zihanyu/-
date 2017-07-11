<html>
<head>
<meta charset="UTF-8">
<title>下午</title>
<script>
</script>
</head>
<body>

<?php

$msg="";

if(!empty($_FILES)){
header("Content-type:text/html;charset=utf-8");
    $tmp_filename=$_FILES["upname"]["tmp_name"];

    $f_name=$_FILES["upname"]["name"];
    $f_size=$_FILES["upname"]["size"];
    $f_type=$_FILES["upname"]["type"];

if($f_type=="image/jpeg" ||$f_type=="image/png"){
if($f_size<5097152 && $f_size>0){
$upflag=move_uploaded_file($tmp_filename,"upimages/".$f_name);
  if($upflag==true){
                       //将所有数据插入数据库
                       insertpro("upimages/".$f_name);
            }else{
              echo "图片上传失败";
            }
}else{
   $msg="为空或者超大";
}
}else{
   $msg="文件格式不对";
}
}

//插入数据库函数
function insertpro($f_name){

header("Content-type:text/html;charset=utf-8");
$db_link=mysql_connect("localhost","root","admin") or die("数据库服务器连接失败！" .mysql_error());
 $db= mysql_select_db("666",$db_link);



$vname= $_REQUEST["pname"];
$vprice= $_REQUEST["price"];
$vcontent= $_REQUEST["content"];
$sql="insert into product(pname,price,content,pimage) values('$vname','$vprice','$vcontent','$f_name')";
$result=mysql_query($sql,$db_link);
mysql_query("SET NAME UTF8");
if(!empty($result)){
echo "插入成功！";
}else{
echo "插入失败！";
}

}

?>

<form action="" method="post" enctype="multipart/form-data">
商品名称：<input type="text" name="pname"><br><br>
商品价格：<input type="text" name="price"><br><br>
商品内容：<input type="text" name="content"><br><br>
<div style="color:red">
<?php
    if(!empty($msg)){
        echo $msg;
    }
?>
</div>

商品图片：<input type="file" id="pimage" name="upname">
<br><br>
<input type="submit" value="新增商品">
</form>


</body>
</html>
