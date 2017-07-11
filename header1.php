<?php
header("Content-type:text/html;charset=utf-8");
  session_start();
  if(!empty($_SESSION["sname"])){
  ?>
  欢迎    <span style="color:red"><?php  echo $_SESSION["sname"];  ?>  </span> 光临本网站！
 您可以 <a href="zhuxiao.php"> 注销</a>
<span > <a  href="login.html"> 登录</a></span>
 <span ><a  href="register.html"> 注册</a></span>
  <?php

    if($_SESSION["sname"]=="admin"){

    ?>
       <a href="admin.html">后台管理</a>

    <?php
    }

   }else{
  ?>
   <a href="login.html">登录</a>  <a href="register.html">  注册</a>

<?php
  }
?>