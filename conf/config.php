<?php
define("BASE_URL", 'http://127.0.0.1:9006/');
define("VENDOR_ROOT", dirname(dirname(__FILE__)) . '/vendor');
define("TEMPLATE_ROOT", dirname(dirname(__FILE__)) . '/app/View');

//Database config info
define("DBHOST", '127.0.0.1');
define("DBUSER", 'root');
define("DBPASS", '');
define("DBNAME", 'zero-cms');

//Project Setting
define('USER_LOGIN_STR', '1Q2W3E');
define('NOW_TIME', date('Y-m-d H:i:s'));
define('USER_MODE', 'SESSION'); //[SESSION, COOKIE]
define('USER_EXPIRE', '3600'); //User Status Time 1h

//API
define("WECHAT_APPID", "");
define("WECHAT_TOKEN", "");

