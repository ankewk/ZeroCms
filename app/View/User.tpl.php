<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>User</title>
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
                    <h1 class="page-header">User</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <button class="btn btn-primary">拉取用户</button>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>OPENID</th>
                                            <th>昵称</th>
                                            <th>性别</th>
                                            <th>头像</th>
                                            <th>是否关注</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($lists as $k=>$v) { ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $v['openid'];?></td>
                                            <td><?php echo $v['nickname'];?></td>
                                            <td><?php echo $v['sex'];?></td>
                                            <td class="center"><?php echo $v['headimgurl'];?></td>
                                            <td class="center"><?php echo $v['subscribe'];?></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <script src="app/View/public/js/jquery-1.11.0.js"></script>
    <script src="app/View/public/js/bootstrap.min.js"></script>
    <script src="app/View/public/js/plugins/metisMenu/metisMenu.min.js"></script>
    <script src="app/View/public/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="app/View/public/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="app/View/public/js/sb-admin-2.js"></script>
    <script>
        
    </script>

</body>

</html>
