<html>
<head>
   <meta charset="UTF-8">
    <title>Title</title>
     <script src="js/jquery-1.8.2.js"></script>
        <script src="js/js_1.7.js"></script>
        <link rel="stylesheet"  href="css/base.css" >
        <script type="text/javascript" src="js/jquery.Zoom.js"></script>
</head>
<body id="spdetail_body">
<div id="spdetail"><div id="spdetail_header">商品详细信息</div>
 <?php  include'conndb.php'?>
<?php
$vpid=$_REQUEST["pid"];
 $sql="select * from product where pid='$vpid'";
$result=mysql_query($sql,$db_link);
while( $v1=mysql_fetch_array($result)){
  ?>
  <div id="spdetail_content">
<div class="magnify_02">
   <div class="large_02" style="background:url('<?php echo $v1['pimage']?>') no-repeat"></div>
    <img  class="small_02" src=<?php echo $v1['pimage']?> width="400"/>
</div>
<div id="spdetail_img1">
<div id="spdetail_imgnp1"></div>
<div class="magnify">
    <div class="large"  style="background:url('<?php echo $v1['pimage']?>') no-repeat"></div>
    <img  style="width:60px ;height:50px; "  class="small" src=<?php echo $v1['pimage']?> />
</div>
<div id="spdetail_imgnp3"></div>
</div>
  <div id="spdetail_spname" >商品名称：<?php echo $v1['pname']?></div>
   <div id="spdetail_price" >商品价格：<?php echo $v1['price']?>/元</div>
   <input  type="hidden" value=<?php echo $v1['pid']?>  id="inp_pid">
  </div>
<?php
}
?>
   <input  type="hidden" value=<?php echo $v1['uid']?> id="inp_uid">
<div id="spdetail_input">数量：<input type="text" id="pnum" value="" ></div><br>
<button onclick="fungm()" id="spdetail_but">购买</button>
</div>
</body>
</html>

