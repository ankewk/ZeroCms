<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Menu</title>
    <link href="app/View/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="app/View/public/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="app/View/public/css/plugins/dataTables.bootstrap.css" rel="stylesheet">
    <link href="app/View/public/css/sb-admin-2.css" rel="stylesheet">
    <link href="app/View/public/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="wrapper">
    <?php include_once "Header.tpl.php";?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Menu</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <button id="creted_menu" class="btn btn-info">新建菜单</button>
                            <button id="list_menu" class="btn btn-info" style="display:none;">菜单列表</button>
                            <button id="sync_menu" class="btn btn-warning">微信同步</button>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div  id="list" class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>菜单名称</th>
                                            <th>父级菜单</th>
                                            <th>是否同步</th>
                                            <th >操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($lists['list'] as $k => $v) { ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $v['name'];?></td>
                                            <td><?php echo $v['pid'];?></td>
                                            <td><?php echo $v['wechat_status'];?></td>
                                            <td class="center">
                                                <button class="update_menu btn btn-primary" value="<?php echo $v['id'];?>">编辑</button> 
                                                <button class="delete_menu btn btn-danger" value="<?php echo $v['id'];?>">删除</button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>

                            <!-- create menu -->
                            <div id="create" class="form-group " style="display:none;">
                                <p>新建菜单</p>
                                <label>菜单名称</label>
                                <input class="form-control menu-name">
                                <label>父级菜单</label>
                                <select class="form-control menu-pid">
                                    <option value=0>无父级菜单</option>
                                <?php foreach($lists['father_list'] as $k => $v) {?>
                                    <option value=<?php echo $v['id'];?>><?php echo $v['name'];?></option>
                                <?php } ?>
                                </select>
                                <button id="menu_post" class="btn btn-primary">创建</button>
                            </div>
                            <!-- create menu end -->

                            <!-- create menu -->
                            <div id="update" class="form-group " style="display:none;">
                                <p>编辑菜单</p>
                                <label>菜单名称</label>
                                <input class="form-control menu-update-name">
                                <label>父级菜单</label>
                                <select class="form-control menu-pid">
                                    <option value=0>无父级菜单</option>
                                <?php foreach($lists['father_list'] as $k => $v) {?>
                                    <option value=<?php echo $v['id'];?>><?php echo $v['name'];?></option>
                                <?php } ?>
                                </select>
                                <button id="menu_update_post" class="btn btn-primary">修改</button>
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
        // list menu page
        $("#list_menu").bind("click", function(){
            $("#creted_menu").show();
            $("#list").show();
            $("#list_menu").hide();
            $("#create").hide();
        });

        // create menu page
        $("#creted_menu").bind("click", function(){
            $("#creted_menu").hide();
            $("#list").hide();
            $("#update").hide();
            $("#list_menu").show();
            $("#create").show();
        });

        // update menu page
        $(".update_menu").bind("click", function(){
            $("#creted_menu").hide();
            $("#list_menu").show();
            $("#list").hide();
            $("#create").hide();
            $("#update").show();
            $("#menu_update_post").attr("value",$(this).val());
        });

        // delete menu page
        $(".delete_menu").bind("click", function(){
            $.ajax({ 
                type: 'POST',
                url: '/menu/delete', 
                data: {
                    "id" : $(this).val()
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

        // create menu post
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

        // update menu post
        $("#menu_update_post").bind("click", function(){
            $.ajax({ 
                type: 'POST',
                url: '/menu/update', 
                data: {
                    "id" : $(this).val(),
                    "name" : $(".menu-update-name").val(),
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
