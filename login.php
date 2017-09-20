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
@session_start();

if(@$_GET['action'] == "logout"){
    unset($_SESSION['uid']);
    unset($_SESSION['username']);
    echo '<script language=javascript>window.location.href="./"</script>'; 
    exit;
};

if(!isset($_POST['passwd'])){
    echo '<script language=javascript>window.location.href="index.php?response=error"</script>'; 
    exit;
};

require_once './include/db.php';

$id=$_POST['id'];
$passwd=md5($_POST['passwd']);
$action=[];

$sure=$database->get("user", "passwd", [
    "username" => $id
]);

$uid=$database->get("user", "uid", [
    "username" => $id,
    "passwd" => $passwd
]);

$type=$database->get("user", "type", [
    "username" => $id,
    "passwd" => $passwd
]);

if(@$passwd<>$sure){
    echo '<script language=javascript>window.location.href="index.php?response=error"</script>'; 
} else {
    $_SESSION['username']=$id;
    $_SESSION['uid']=$uid;
    $_SESSION['type']=$type;
    echo '<script language=javascript>window.location.href="./dash/"</script>';  
    exit;
};
?>
