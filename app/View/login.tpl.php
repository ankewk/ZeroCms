<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>登陆</title>
    <link href="app/View/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="app/View/public/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="app/View/public/css/sb-admin-2.css" rel="stylesheet">
    <link href="app/View/public/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">  
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Welcome ZeroCms</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="/login" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control login-name" placeholder="Name" name="name" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control login-password" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <button class="btn btn-lg btn-success btn-block btn-primary user-login" title="Popover title" data-container="body" data-toggle="popover" data-placement="top" data-content="顶部的 Popover 中的一些内容">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="app/View/public/js/jquery-1.11.0.js"></script>
    <script src="app/View/public/js/bootstrap.min.js"></script>
    <script src="app/View/public/js/plugins/metisMenu/metisMenu.min.js"></script>
    <script src="app/View/public/js/user.js"></script>
    <script src="app/View/public/js/sb-admin-2.js"></script>
</body>
</html>
