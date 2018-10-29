<?php
use Zero\Controller;
use Model\CommonModel;
use Model\ApiModel;
use Zero\Response;

class APIController extends Controller
{
    public function __construct() 
    {
        parent::__construct();
    }

    public function getAccessTokenZero()
    {
        $api = new ApiModel();
        $accessToken = $api->getAccessToken();
        $this->statusPrint(200,$accessToken);
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
        $api = new ApiModel();
        $checkRes = $api->wechat($tmp,$signature);
        $response = new Response($echostr);
        if($checkRes){
            $response->send();
        }
        $this->statusPrint(1000,'wechat check failed!');
    }
}