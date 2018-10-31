<?php

namespace Model;

use Zero\Model;
use Lib\ZeroWechat;
use Zero\Cache;

class ApiModel extends Model
{
    const MENU_TABLE = '`zero_api`';
    public $zeroWechat;
    
    public function __construct() 
    {
        parent::__construct();
        $this->table = self::MENU_TABLE;
        $this->zeroWechat = new ZeroWechat();
    }

    public function wechat($tmp,$signature)
    {
        $signatureRes = $this->zeroWechat->wechat($tmp,$signature);
        if($signatureRes == $signature)
            return true;
        return false;
    }

    public function getAccessToken()
    {
        $response = $this->zeroWechat->getAccessToken(WECHAT_APPID,WECHAT_TOKEN);
        if(isset($response->access_token)){
            Cache::init('redis',7100);
            if(!Cache::get('access_token'))
                Cache::set('access_token',$response->access_token);
            return [0,Cache::get('access_token')];
        }
        return [$response->errcode,$response->errmsg];
    }

    public function createMenuWechat()
    {
        $menuModel = new \Model\MenuModel();
        $menuData = $menuModel->listMenu();
        var_dump($menuData);exit;
    }
}