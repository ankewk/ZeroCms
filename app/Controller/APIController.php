<?php
use Zero\Controller;
use Model\CommonModel;
use Model\AnkeWechatModel;

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
        $param = [
            'nonce' => 'string',
            'echostr' => 'string',
            'timestamp' => 'string',
            'signature' => 'string'
        ];
        $request = $this->Request();
        $request->validation($param);
        $nonce = $request->getParam('nonce');
        $echostr = $request->getParam('echostr');
        $timestamp = $request->getParam('timestamp');
        $signature = $request->getParam('signature');
        $tmp = [$timestamp,$nonce,WECHAT_TOKEN];
        $api = new AnkeWechatModel();
        $checkRes = $api->wechat($tmp,$signature);
        if($checkRes)
            return $echostr;
        return;
    }
}