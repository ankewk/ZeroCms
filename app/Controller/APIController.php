<?php
use Zero\Controller;
use Model\CommonModel;
use Model\ApiModel;
use Zero\Response;

class APIController extends Controller
{
    private $api;

    public function __construct() 
    {
        parent::__construct();
        $this->api = new ApiModel();
    }

    public function getAccessTokenZero()
    {
        
        $response = $this->api->getAccessToken();
        $this->statusPrint($response[0],$response[1]);
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
        $checkRes = $this->api->wechat($tmp,$signature);
        $response = new Response($echostr);
        if($checkRes){
            $response->send();
        }
        $this->statusPrint(1000,'wechat check failed!');
    }

    public function createMenuZero()
    {
        $this->api->createMenuWechat();
    }
}