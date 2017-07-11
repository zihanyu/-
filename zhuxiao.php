<?php
//删除指定session
session_start();
unset($_SESSION["sid"]);
unset($_SESSION["sname"]);

//删除当前所有会话
//session_destroy();

//php跳转页面
header("Location: login.html");

//header("Location: login.html");




?>