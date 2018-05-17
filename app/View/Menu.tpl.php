<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>菜单管理</title>
    <link href="app/View/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="app/View/public/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="app/View/public/css/plugins/dataTables.bootstrap.css" rel="stylesheet">
    <link href="app/View/public/css/sb-admin-2.css" rel="stylesheet">
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
                <a class="navbar-brand" href="/">ZeroCms</a>
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
                    <h1 class="page-header">菜单管理</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            菜单列表
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <button id="creted_menu" class="btn btn-default">新建菜单</button>
                            <button id="sync_menu" class="btn btn-default">微信同步</button>
                        </div>
                        <hr>
                        <div class="panel-body">
                            <div  id="list" class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>菜单名称</th>
                                            <th>父级菜单</th>
                                            <th>是否同步</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($lists['list'] as $k => $v) { ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $v['name'];?></td>
                                            <td><?php echo $v['pid'];?></td>
                                            <td><?php echo $v['wechat_status'];?></td>
                                            <td class="center">
                                                <input type="hidden" name="menu_id" value="<?php echo $v['id'];?>">
                                                <a class="update_menu">编辑</a> / <a class="delete_menu">删除</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>

                            <!-- create menu -->
                            <div id="create" class="form-group " style="display:none;">
                                <label>菜单名称</label>
                                <input class="form-control menu-name">
                                <label>父级菜单</label>
                                <select class="form-control menu-pid">
                                    <option value=0>无父级菜单</option>
                                <?php foreach($lists['father_list'] as $k => $v) {?>
                                    <option value=<?php echo $v['id'];?>><?php echo $v['name'];?></option>
                                <?php } ?>
                                </select>
                                <button id="menu_post" class="btn btn-default">创建</button>
                            </div>
                            <!-- create menu end -->

                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
    </div>
    <script src="app/View/public/js/jquery-1.11.0.js"></script>
    <script src="app/View/public/js/bootstrap.min.js"></script>
    <script src="app/View/public/js/plugins/metisMenu/metisMenu.min.js"></script>
    <script src="app/View/public/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="app/View/public/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="app/View/public/js/sb-admin-2.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables-example').dataTable();
        });
        
        // create menu page
        $("#creted_menu").bind("click", function(){
            $("#creted_menu").hide();
            $("#list").hide();
            $("#create").show();
        });

        // update menu page
        $(".update_menu").bind("click", function(){
            alert(1);
            $("#creted_menu").hide();
            $("#list").hide();
            $("#create").show();
        });

        // delete menu page
        $(".delete_menu").bind("click", function(){
            alert(2);
        });

        $("#menu_post").bind("click", function(){
            $.ajax({ 
                type: 'POST',
                url: '/menu/create', 
                data: {
                    "name" : $(".menu-name").val(),
                    "pid" : $(".menu-pid").val()
                },
                success:function(data) {
                    alert(data.msg);
                    if(data.status == 10) {
                        window.location.href = '/menu';
                    } else {
                        location.reload() 
                    }
                }
            });
        });

    </script>
</body>
</html>
