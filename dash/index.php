<?php
session_start();

//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['uid'])){
    header("Location:../index.php?response=login");
    exit();
}
require_once "../include/db.php";
//包含数据库连接文件
$userid = $_SESSION['uid'];
$username = $_SESSION['username'];
$usertype = $_SESSION['type'];
?>


    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>南工社联社团管理系统</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="renderer" content="webkit">
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <link href="https://cdn.bootcss.com/pace/1.0.2/themes/blue/pace-theme-minimal.min.css" rel="stylesheet">
        <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/amazeui.min.css" />
        <link rel="stylesheet" href="assets/css/admin.css">
        <link rel="stylesheet" href="assets/css/app.css">
        <link href="../assets/css/nowbtn.css" rel="stylesheet" />
        <script src="assets/js/echarts.min.js"></script>
        <script src="https://cdn.bootcss.com/pace/1.0.2/pace.min.js"></script>
    </head>

    <body data-type="index">


        <header class="am-topbar am-topbar-inverse admin-header">
            <div class="am-topbar-brand">
                <a href="javascript:;" class="tpl-logo">
                <img src="../assets/img/logo_meteor.png" alt="">
            </a>
            </div>
        <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right"></div><div style="color:#999">显示/隐藏菜单</div>
            <div class="am-collapse am-topbar-collapse" id="topbar-collapse">
                <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">
                    <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                        <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                        你好，<span class="tpl-header-list-user-nick"><?php echo $username?></span>
                    </a>
                        <ul class="am-dropdown-content">
                            <li><a href="#"><span class="am-icon-bell-o"></span> 资料</a></li>
                            <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
                            <li><a href="../login.php?action=logout"><span class="am-icon-power-off"></span> 退出</a></li>
                        </ul>
                    </li>
                    <li><a href="../login.php?action=logout" class="tpl-header-list-link"><span class="am-icon-sign-out tpl-header-list-ico-out-size"></span></a></li>
                </ul>
            </div>
        </header>

        <div class="tpl-page-container tpl-page-header-fixed">
        <div class="tpl-left-nav tpl-left-nav-hover">
            <div class="tpl-left-nav-title">
                南工社联社团管理系统
            </div>

            <div class="tpl-left-nav-list">
                <ul class="tpl-left-nav-menu">
                    <li class="tpl-left-nav-item">
                        <a href="#" class="nav-link active">
                        <i class="am-icon-home"></i>
                        <span>首页</span>
                    </a>
                    </li>
                    <li class="tpl-left-nav-item">
                        <a href="#" class="nav-link tpl-left-nav-link-list">
                        <i class="am-icon-bullhorn"></i>
                        <span>公告</span>
                    </a>
                    </li>
                    <li class="tpl-left-nav-item">
                        <a href="#" class="nav-link tpl-left-nav-link-list">
                        <i class="am-icon-wpforms"></i>
                        <span>申报活动</span>
                    </a>
                    </li>
                    <li class="tpl-left-nav-item">
                        <a href="#" class="nav-link tpl-left-nav-link-list">
                        <i class="am-icon-futbol-o"></i>
                        <span>社团信息</span>
                    </a>
                    </li>
                    <li class="tpl-left-nav-item">
                        <a href="#" class="nav-link tpl-left-nav-link-list">
                        <i class="am-icon-cog"></i>
                        <span>用户设置</span>
                    </a>
                    </li>
                    <?php if($usertype <> 'org' ){
                    echo'<li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                        <i class="am-icon-cogs"></i>
                        <span>审批与管理</span>
                        <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                        </a>';};
                        echo '<ul class="tpl-left-nav-sub-menu" style="display: block;">
                            <li>';
                            if($usertype =='act'){
                                echo'<a href="#">
                                <i class="am-icon-angle-right"></i>
                               <span>活动审批</span>
                            </a>';};
                            if($usertype =='su'){
                                echo'<a href="../redirect.php?action=userAdmin">
                                <i class="am-icon-angle-right"></i>
                                <span>账号管理</span>
                            </a>
                            <a href="../redirect.php?action=sql">
                                <i class="am-icon-angle-right"></i>
                                <span>数据库管理</span>
                            </a>';};
                            ?>
                            </li>
                        </ul>
                    </li>
                    <li class="tpl-left-nav-item">
                        <a href="../login.php?action=logout" class="nav-link tpl-left-nav-link-list">
                        <i class="am-icon-sign-out"></i>
                        <span>退出登录</span>
                    </a>
                    </li>
                </ul>
            </div>
        </div>
            <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                欢迎你，<?php echo($username."的小伙伴！&nbsp(UID:".$userid.")");?>
            </div>
            <ol class="am-breadcrumb">
                <li><a href="#" class="am-icon-home am-active">首页</a></li>
                <!--<li><a href="#">分类</a></li>
                <li class="am-active">内容</li>-->
            </ol>
            <div class="tpl-content-scope">
                <div class="am-alert am-alert-danger" data-am-alert>
                <button type="button" class="am-close">&times;</button>
                <p><i class="am-icon-exclamation-triangle"></i>&nbsp&nbsp本系统正处于开发阶段！</p>
                </div>
            </div>
            <div class="row">
                <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
                    <div class="dashboard-stat blue">
                        <div class="visual">
                            <i class="am-icon-futbol-o"></i>
                        </div>
                        <div class="details">
                            <div class="number">申报活动</div>
                            <div class="desc">  </div>
                        </div>
                        <a class="more" href="#"> 点击此处进入
                    <i class="m-icon-swapright m-icon-white"></i>
                </a>
                    </div>
                </div>
                <?php if($usertype == 'act'){
                echo '<div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
                    <div class="dashboard-stat green">
                        <div class="visual">
                            <i class="am-icon-gamepad"></i>
                        </div>
                        <div class="details">
                            <div class="number">活动审批</div>
                            <div class="desc">  </div>
                        </div>
                        <a class="more" href="#"> 点击此处进入
                    <i class="m-icon-swapright m-icon-white"></i>
                </a>
                    </div>
                </div>';
                };?>
                 <?php if($usertype == 'su'){
                echo'<div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
                    <div class="dashboard-stat green">
                        <div class="visual">
                            <i class="am-icon-cogs"></i>
                        </div>
                        <div class="details">
                            <div class="number">账户管理</div>
                            <div class="desc">  </div>
                        </div>
                        <a class="more" href="../redirect.php?action=userAdmin"> 点击此处进入
                    <i class="m-icon-swapright m-icon-white"></i>
                </a>
                    </div>
                </div>
                <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
                    <div class="dashboard-stat purple">
                        <div class="visual">
                            <i class="am-icon-database"></i>
                        </div>
                        <div class="details">
                            <div class="number">数据库管理</div>
                            <div class="desc">  </div>
                        </div>
                        <a class="more" href="../redirect.php?action=sql"> 点击此处进入
                    <i class="m-icon-swapright m-icon-white"></i>
                </a>
                    </div>
                </div>';
                };?>
                <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
                    <div class="dashboard-stat red">
                        <div class="visual">
                            <i class="am-icon-sign-out"></i>
                        </div>
                        <div class="details">
                            <div class="number">注销登录</div>
                            <div class="desc">  </div>
                        </div>
                        <a class="more" href="../login.php?action=logout"> 点击此处退出登录
                    <i class="m-icon-swapright m-icon-white"></i>
                </a>
                    </div>
                </div>
            </div>
            </div>           
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/amazeui.min.js"></script>
            <script src="assets/js/iscroll.js"></script>
            <script src="assets/js/app.js"></script>
    </body>

    </html>