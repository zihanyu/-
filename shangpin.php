<!DOCTYPE html>
       <html lang="en">
       <head>
           <meta charset="UTF-8">
           <title></title>
       </head>

       <body>
       <?php include'conndb.php'?>
       <?php
         $sql="select * from product ";
         $result=mysql_query($sql,$db_link);
         while($v1=mysql_fetch_array($result)){
       ?>
       <a id="spa" style="width:300px;height:300px;float:left;"
       href="spdetail1.php?pid=<?php echo $v1['pid']?>">
       <img style="width:200px ;height:200px;"  src=<?php echo $v1['pimage']?>>
       <div>商品名称: <?php echo $v1['pname']?></div>
       <div>价格: <?php echo $v1['price']?>/元</div>
       </a>
       <?php
       }
       ?>
       </body>
       </html>