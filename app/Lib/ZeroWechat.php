<?php

namespace Lib;
use Zero\Cache;

class ZeroWechat
{
    public function __construct()
    {
        
    }

    public function wechat($tmp,$signature)
    {
        sort($tmp, SORT_STRING);
        $tmpStr = implode($tmp);
        $tmpRes = sha1($tmpStr);
        if($signature == $tmpRes)
            return true;
        return false;
    }

    public function getAccessToken()
    {
        // https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wx04e31487af226b1c&secret=e33f2ca0c3054fd7486630b1883c9787
        $url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid='.WECHAT_APPID.'&secret='.WECHAT_TOKEN;
        EasyApi::init($url,'','get');
        $response = EasyApi::get();
        var_dump($response);exit;
        $response = json_decode($response);
        var_dump($response);exit;
        Cache::init('reids',7100);
        Cache::set('access_token',$response->access_token);
        $accessToken = Cache::get(access_token);
        return $accessToken;
    }

    public function createMenu()
    {

    }

}