<html>
<head>
   <meta charset="UTF-8">
    <title>Title</title>
     <script src="js/jquery-1.8.2.js"></script>
        <script src="js/js_1.7.js"></script>
        <link rel="stylesheet"  href="css/base.css" >
        <script type="text/javascript" src="js/jquery.Zoom.js"></script>
    <script>
       function fungm(){
         var vpid=document.getElementById("inp_pid").value;
         var vuid= document.getElementById("inp_uid").value;
         var vnum= document.getElementById("pnum").value;
           location.href="spdingdan.php?pid="+vpid+"&num="+vnum+"&uid="+vuid;
       }
    </script>
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
    <div class="large_02" style="background:url('<?php echo $v1['pimage']?>')"></div>
    <img  class="small_02" src=<?php echo $v1['pimage']?> width="400"/>
</div>

<div id="spdetail_img1">
<div id="spdetail_imgnp1"></div>
<div class="magnify">
    <div class="large"  style="background:url('<?php echo $v1['pimage']?>')"></div>

    <img  style="width:60px ;height:50px; "  class="small" src=<?php echo $v1['pimage']?> />
</div>
<div id="spdetail_imgnp3"></div>
</div>
  <div id="spdetail_spname">商品名称：<?php echo $v1['pname']?></div>
   <div id="spdetail_price">商品价格：<?php echo $v1['price']?>/元</div>
   <!--提取产品ID-->
   <input type="hidden" value=<?php echo $v1['pid']?> id="inp_pid">
  </div>
<?php
}
?>
   <!--提取会员ID-->
   <input type="hidden" value=<?php echo $v1['sid']?> id="inp_uid">
<div id="spdetail_input">数量：<input type="text" id="pnum"></div><br>
<button onclick="fungm()" id="spdetail_but">购买<button>
</div>
</body>
</html>
<script type="text/javascript">
    $(function(){

        $(".magnify").hover(function(){
            $.fn.imageZoom({
                small :"small",
                large : "large",
                magnify: "magnify"
            });

        },function(){})

        $(".magnify_02").hover(function(){
            $.fn.imageZoom({
                small : "small_02",
                large : "large_02",
                magnify: "magnify_02"
            });

        },function(){})

    })
</script>