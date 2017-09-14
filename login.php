<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <!-- CSS Files -->
    <link rel="stylesheet" href="./assets/css/main.css">
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <link href="https://cdn.bootcss.com/pace/1.0.2/themes/orange/pace-theme-minimal.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!--   Core JS Files   -->
    <script src="./assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="./assets/js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>
    <script src="https://cdn.bootcss.com/pace/1.0.2/pace.min.js"></script>
    <title>登录</title>
</head>
<body>
<body class="login-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="dropdown button-dropdown">
                <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                    <span class="button-bar"></span>
                    <span class="button-bar"></span>
                    <span class="button-bar"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="./help.php">使用帮助</a>
                    <a class="dropdown-item" href="./about.php">关于我们</a>
                </div>
            </div>
            <div class="navbar-translate">
                <a class="navbar-brand" href="#" rel="tooltip" title="登陆管理系统，如需帮助请联系管理员。" data-placement="bottom" target="_blank">
                    <div style="font-size:14pt">南工社联社团管理系统</div>
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="微信公众号" data-placement="bottom" href="" target="_blank">
                            <i class="fa fa-weixin"></i>
                            <p class="d-lg-none d-xl-none">微信</p>
                        </a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="QQ公众号" data-placement="bottom" href="" target="_blank">
                            <i class="fa fa-qq"></i>
                            <p class="d-lg-none d-xl-none">QQ</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="新浪微博" data-placement="bottom" href="" target="_blank">
                            <i class="fa fa-weibo"></i>
                            <p class="d-lg-none d-xl-none">新浪微博</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="page-header" filter-color="blue">
        <div class="page-header-image" style="background-image:url(./assets/img/login.jpg)"></div>
        <div class="container">
            <div class="col-md-4 content-center">
                <div class="card card-login card-plain">
<?php
    require './include/db.php';
    
    $id=$_POST['id'];
    $passwd=$_POST['passwd'];
    $action=[];

    $uid=$database->get("user", "uid", [
        "username" => $id,
        "passwd" => $passwd
    ]);

    @session_start();

    if(@empty($uid)){
        echo("<h4>用户不存在或者密码错误！</h4>");
        echo("</br>");
        echo("<a href='index.php'><button type='button' class='btn btn-danger btn-round btn-lg btn-block'><i class='fa fa-angle-left' aria-hidden='true'></i>&nbsp返回重新登录</button></a>");
    } else {
        $_SESSION['username']=$id;
        $_SESSION['uid']=$uid;
        echo '<script language=javascript>window.location.href="./app/"</script>'; 
        exit;
    };

    if(@$_GET['action'] == "logout"){
        unset($_SESSION['uid']);
        unset($_SESSION['username']);
        echo '<script language=javascript>window.location.href="index.php"</script>'; 
        exit;
    }
?>   
</div>
</div>
</div>
<footer class="footer">
<div class="container">
    <nav>
        <ul>
            <li>
                <a href="./help.php">
                    使用帮助
                </a>
                
            </li>
            <li>
                <a href="./feedback.php">
                    反馈
                </a>
                
            </li>
            <li>
                <a href="./about.php">
                    关于我们
                </a>
            </li>
        </ul>
    </nav>
    <div class="copyright">
        &copy;
        <script>
            document.write(new Date().getFullYear())
        </script>, Created by
        <a> ASSN</a>.
    </div>
</div>
</footer>
</div>
</body>
</html>