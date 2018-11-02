<?php
require_once dirname(dirname(__FILE__)).'/app/Lib/EasyORM.php';
require_once dirname(dirname(__FILE__)).'/conf/config.php';
$config = [
    'dbhost' => DBHOST,
    'dbname' => DBNAME,
    'dbuser' => DBUSER,
    'dbpassword' => DBPASS,
];
$path = dirname(dirname(__FILE__)).'/db';
EasyORM::config($config,$path);

if(!isset($argv[1]))
    EasyORM::shellList();
$input = explode(":",$argv[1]);
call_user_func_array(['EasyORM',"{$input[1]}"],[$input[2]]);