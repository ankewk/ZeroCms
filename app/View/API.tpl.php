<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>API管理</title>
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
                    <h1 class="page-header">API管理</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <button id="access_token" class="btn btn-info">授权 API</button>
                            <button id="jssdk" class="btn btn-info">JSSDK API</button>
                            <button id="custom_msg" class="btn btn-info">模板消息 API</button>
                        </div>
                        <!-- /.panel-heading -->
                            <!-- access_token -->
                            <div class="panel-body token" style="">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>token</th>
                                                <th>Browser</th>
                                                <th>Platform(s)</th>
                                                <th>Engine version</th>
                                                <th>CSS grade</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>Trident</td>
                                                <td>Internet Explorer 4.0</td>
                                                <td>Win 95+</td>
                                                <td class="center">4</td>
                                                <td class="center">X</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- jssdk -->
                            <div class="panel-body jssdk" style="display:none;">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>jssdk</th>
                                                <th>Browser</th>
                                                <th>Platform(s)</th>
                                                <th>Engine version</th>
                                                <th>CSS grade</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>Trident</td>
                                                <td>Internet Explorer 4.0</td>
                                                <td>Win 95+</td>
                                                <td class="center">4</td>
                                                <td class="center">X</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- custom_msg -->
                            <div class="panel-body msg" style="display:none;">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>custom</th>
                                                <th>Browser</th>
                                                <th>Platform(s)</th>
                                                <th>Engine version</th>
                                                <th>CSS grade</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>Trident</td>
                                                <td>Internet Explorer 4.0</td>
                                                <td>Win 95+</td>
                                                <td class="center">4</td>
                                                <td class="center">X</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
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
        $("#access_token").bind("click", function(){
            $(".token").show();
            $(".jssdk").hide();
            $(".msg").hide();
        });
        $("#jssdk").bind("click", function(){
            $(".jssdk").show();
            $(".token").hide();
            $(".msg").hide();
        });
        $("#custom_msg").bind("click", function(){
            $(".msg").show();
            $(".token").hide();
            $(".jssdk").hide();
        });
    </script>

</body>

</html>
