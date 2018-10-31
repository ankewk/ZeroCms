<?php
namespace Lib;

class ZeroWechat
{
    private $easyApi;
    public function __construct()
    {
        $this->easyApi = new EasyApi();
    }

    public function wechat($tmp,$signature)
    {
        $this->easyApi->init($tmp)->signature();
        return EasyApi::$response;
    }

    public function getAccessToken($appid,$secret)
    {
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid={$appid}&secret={$secret}";
        $this->easyApi->init(['url'=>$url,'param'=>'','method'=>'get'])->get();
        return EasyApi::$response;
    }

    public function createMenu($data,$token)
    {
        $url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token={$token}";
        $this->easyApi->init(['url'=>$url,'param'=>$data,'method'=>'get'])->json()->get();
        return EasyApi::$response;
    }

}