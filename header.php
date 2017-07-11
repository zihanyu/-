<?php
header("Content-type:text/html;charset=utf-8");
  session_start();
?>
  欢迎您，
<?php
<span style="color:red"><?php  echo $_SESSION["sname"];  ?>  </span>
  ?>
    进入我们的网站！

  <a href="zhuxiao.php"> 注销</a>

