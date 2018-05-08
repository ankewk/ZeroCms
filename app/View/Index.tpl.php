<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ZeroCms</title>
    <link href="app/View/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="app/View/public/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="app/View/public/css/plugins/timeline.css" rel="stylesheet">
    <link href="app/View/public/css/sb-admin-2.css" rel="stylesheet">
    <link href="app/View/public/css/plugins/morris.css" rel="stylesheet">
    <link href="app/View/public/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">ZeroCms</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="https://ankewk.github.io/"><i class="fa fa-user fa-fw"></i>Anke博客</a>
                        </li>
                        <li><a href="https://github.com/ankewk/ZeroPHP"><i class="fa fa-gear fa-fw"></i>ZeroPHP框架</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="/userlogout"><i class="fa fa-sign-out fa-fw"></i>退出登陆</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="/menu"><i class="fa fa-bar-chart-o fa-fw"></i> 菜单管理 </a>
                        </li>
                        <li>
                            <a href="/user"><i class="fa fa-table fa-fw"></i> 用户管理 </a>
                        </li>
                        <li>
                            <a href="/news"><i class="fa fa-edit fa-fw"></i> 消息管理 </a>
                        </li>
                        <li>
                            <a href="/api"><i class="fa fa-wrench fa-fw"></i> 第三方API </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">ZeroCms</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-clock-o fa-fw"></i> 那些关于ZeroCms的事
                        </div>
                        <div class="panel-body">
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-badge"><i class="fa fa-check"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">ZeroPHP</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>简而不失其华，为轻而生的PHP框架，快速搭建PHP应用的框架。</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge warning"><i class="fa fa-credit-card"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">ZeroCms</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>基于ZeroPHP框架开发的微信CMS</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge danger"><i class="fa fa-bomb"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Anke Wang</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>4年 IT从业经验，擅长web方面开发运维。精通PHP方面开发。ZeroPHP框架的开发者。</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title"> 未完待续 </h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>开源之路漫长，期待那个志同道合的你一起并肩前行。</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <!-- /.panel -->
                    <!-- /.panel -->
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="app/View/public/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="app/View/public/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="app/View/public/js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="app/View/public/js/plugins/morris/raphael.min.js"></script>
    <script src="app/View/public/js/plugins/morris/morris.min.js"></script>
    <script src="app/View/public/js/plugins/morris/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="app/View/public/js/sb-admin-2.js"></script>

</body>

</html>
