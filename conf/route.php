<?php
$route = [];
//System
$route['/'] = ['Page', 'index'];
$route['/login'] = ['Page', 'login'];
$route['/user'] = ['Page', 'user'];
$route['/news'] = ['Page', 'news'];
$route['/menu'] = ['Page', 'menu'];
$route['/api'] = ['Page', 'api'];
$route['/qrcode'] = ['Page', 'qrcode'];

//User
$route['/userlogin'] = ['User', 'login'];
$route['/userlogout'] = ['User', 'logout'];

//Menu
$route['/menu/create'] = ['Menu', 'creatMenu'];
$route['/menu/update'] = ['Menu', 'updateMenu'];
$route['/menu/delete'] = ['Menu', 'deleteMenu'];

//API
$route['/api/getaccesstoken'] = ['API', 'getAccessToken'];