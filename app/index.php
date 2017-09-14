<?php
session_start();

//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['uid'])){
    header("Location:../index.php");
    exit();
}
//包含数据库连接文件
$userid = $_SESSION['uid'];
$username = $_SESSION['username'];
echo '用户信息：<br />';
echo '用户ID：',$userid,'<br />';
echo '用户名：',$username,'<br />';
echo '<a href="../login.php?action=logout">注销</a> 登录<br />';
?>