<?php
session_start();
if(!empty($_SESSION['uid'])){
    echo '<script language=javascript>window.location.href="./dash/"</script>'; 
}
?>
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
    <link href="https://cdn.bootcss.com/pace/1.0.2/themes/blue/pace-theme-minimal.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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
    <title>南工社联社团管理系统-登陆</title>
</head>

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
                    <form class="form" method="post" action="login.php">
                        <div class="header header-primary text-center">
                            <div class="logo-container">
                                <img src="./assets/img/logo.png" alt="">
                            </div>
                        </div>
                        <?php
                                if(@$_GET['response'] == "error"){
                                    echo("<a href='#' class='btn btn-danger'>用户名不存在或密码错误，请重新登陆！</a>");
                                };
                                if(@$_GET['response'] == "login"){
                                    echo("<a href='#' class='btn btn-warning'>您还没有登陆，请先登陆！</a>");
                                };
                                ?> 
                            </br>
                        <div class="content">
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                                <input type="text" class="form-control" id="id" name="id" placeholder="用户名" autofocus required/>
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                </span>
                                <input type="password" placeholder="密码" id="passwd" name="passwd" class="form-control" required/>                              
                            </div>
                            <a class="btn btn-link" style="font-size:14px" rel="tooltip" title="忘记密码请联系管理员" data-placement="bottom" target="_blank">忘记密码</a>
                        </div>
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-info btn-round btn-lg btn-block"><i class="now-ui-icons ui-1_send"></i>&nbsp登录</button>
                            <button type="button" class="btn btn-danger btn-round btn-lg btn-block" onclick="location='./guest/'"><i class="fa fa-key"></i>&nbsp免登录功能</button>
                        </div>
                    </form>
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
                Meteor &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    <a> ASSN </a>.
                </div>
            </div>
        </footer>
    </div>
</body>
</html>