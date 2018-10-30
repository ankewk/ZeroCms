<?php

namespace Lib;
use Zero\Cache;

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
        if(EasyApi::$response == $signature)
            return true;
        return false;
    }

    public function getAccessToken()
    {
        $url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid='.WECHAT_APPID.'&secret='.WECHAT_TOKEN;
        $this->easyApi->init(['url'=>$url])->checkDomain();
        var_dump(EasyApi::$response);exit;
        $this->easyApi->init(['url'=>$url,'param'=>'','method'=>'get'])->get();
        var_dump(EasyApi::$response->errcode);exit;
        Cache::init('reids',7100);
        Cache::set('access_token',$response->access_token);
        $accessToken = Cache::get(access_token);
        return $accessToken;
    }

    public function createMenu()
    {

    }

}