<?php
use Zero\Controller;
use Model\CommonModel;
use Model\ApiModel;

class APIController extends Controller
{
    public function __construct() 
    {
        parent::__construct();
    }

    public function getAccessTokenZero()
    {
        $param = [
            'name' => 'string',
            'age' => 'string'
        ];
        $request = $this->Request();
        $request->validation($param);
        $name = $request->getParam('name');
        $age = $request->getParam('age');
        echo "获取accesstoken";exit;
    }

    public function jsSdk()
    {
        echo "获取jssdk";exit;
    }

    public function wechatZero()
    {
        $api = new ApiModel();
        $api->wechat();
    }
}