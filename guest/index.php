<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>南工社联社团管理</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link href="https://cdn.bootcss.com/pace/1.0.2/themes/blue/pace-theme-minimal.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../dash/assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="../dash/assets/css/admin.css">
    <link rel="stylesheet" href="../dash/assets/css/app.css">
    <link href="../assets/css/nowbtn.css" rel="stylesheet" />
    <script src="../dash/assets/js/echarts.min.js"></script>
    <script src="https://cdn.bootcss.com/pace/1.0.2/pace.min.js"></script>
</head>

<body data-type="index">


        <header class="am-topbar am-topbar-inverse admin-header">
            <div class="am-topbar-brand">
                <a href="javascript:;" class="tpl-logo">
                <img src="../assets/img/logo_meteor.png" alt="">
            </a>
            </div>
        <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right"></div>
        <div class="am-collapse am-topbar-collapse" id="topbar-collapse">
            <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">
                <li><a href="../" class="tpl-header-list-link"><span>登录</span></a></li>
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
                        <i class="am-icon-futbol-o"></i>
                        <span>社团查询</span>
                    </a>
                    </li>
                    <li class="tpl-left-nav-item">
                        <a href="#" class="nav-link tpl-left-nav-link-list">
                        <i class="am-icon-wpforms"></i>
                        <span>申请注册社团</span>
                    </a>
                    </li>
                    <li class="tpl-left-nav-item">
                        <a href="#" class="nav-link tpl-left-nav-link-list">
                        <i class="am-icon-university"></i>
                        <span>投诉</span>
                    </a>
                    </li>
                    <li class="tpl-left-nav-item">
                        <a href="#" class="nav-link tpl-left-nav-link-list">
                        <i class="am-icon-comments-o"></i>
                        <span>对小联说</span>
                    </a>
                    </li>
                    <li class="tpl-left-nav-item">
                        <a href="../" class="nav-link tpl-left-nav-link-list">
                        <i class="am-icon-sign-in"></i>
                        <span>返回登陆</span>
                    </a>
                    </li>
                </ul>
            </div>
        </div>
            <div class="tpl-content-wrapper">
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
                            <i class="am-icon-wpforms"></i>
                        </div>
                        <div class="details">
                            <div class="number">申请注册社团</div>
                            <div class="desc">  </div>
                        </div>
                        <a class="more" href="#"> 点击此处进入
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
                <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
                    <div class="dashboard-stat red">
                        <div class="visual">
                            <i class="am-icon-university"></i>
                        </div>
                        <div class="details">
                            <div class="number">投诉</div>
                            <div class="desc">  </div>
                        </div>
                        <a class="more" href="#"> 点击此处进入
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
                <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
                    <div class="dashboard-stat green">
                        <div class="visual">
                            <i class="am-icon-comments-o"></i>
                        </div>
                        <div class="details">
                            <div class="number">和小联说</div>
                            <div class="desc">  </div>
                        </div>
                        <a class="more" href="#"> 点击此处进入
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
                <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
                    <div class="dashboard-stat purple">
                        <div class="visual">
                            <i class="am-icon-futbol-o"></i>
                        </div>
                        <div class="details">
                            <div class="number">社团查询</div>
                            <div class="desc">共$count家</div>
                        </div>
                        <a class="more" href="#"> 点击此处进入
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
            </div>
            </div>           
            <script src="../dash/assets/js/jquery.min.js"></script>
            <script src="../dash/assets/js/amazeui.min.js"></script>
            <script src="../dash/assets/js/iscroll.js"></script>
            <script src="../dash/assets/js/app.js"></script>
    </body>

    </html>