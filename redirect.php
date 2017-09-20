<?php
session_start();

//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['uid'])){
    header("Location:./index.php?response=login");
    exit();
}
require_once "./include/db.php";
//包含数据库连接文件
$userid = $_SESSION['uid'];
$username = $_SESSION['username'];
$usertype = $_SESSION['type'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loading</title>
    <link rel="stylesheet" href="./assets/css/load.css">
    <link rel="stylesheet" href="./assets/css/main.css">
</head>
<body style="background:#e9ecf3">
<div class="loader">
<div class="dot"></div>
<div class="dot"></div>
<div class="dot"></div>
<div class="dot"></div>
<div class="dot"></div>
<strong style="color:#999"><center>正在处理，请稍候……</center></strong>
</div>
</body>
</html>
<?php
    if($_GET['action']=='sql'){
        if($usertype <> "su"){
            header("Location:./dash/app/error.php?code=10403");
        }else{
            header("Location:./include/sqlman");
        };
    };
    if($_GET['action']=='userAdmin'){
        header("Location:./dash/app/userAdmin.php");
    };