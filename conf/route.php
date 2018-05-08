<?php
$route = [];
//System
$route['/'] = ['Page', 'index'];
$route['/login'] = ['Page', 'login'];
$route['/user'] = ['Page', 'user'];
$route['/news'] = ['Page', 'news'];
$route['/menu'] = ['Page', 'menu'];
$route['/api'] = ['Page', 'api'];

//project
$route['/userlogin'] = ['User', 'login'];
$route['/userlogout'] = ['User', 'logout'];

//API
$route['/api/getaccesstoken'] = ['API', 'getAccessToken'];