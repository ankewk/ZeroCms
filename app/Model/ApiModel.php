<?php

namespace Model;

use Zero\Model;
use EasyWeChat\Factory;

class ApiModel extends Model
{
    const MENU_TABLE = '`zero_api`';
    
    public function __construct() 
    {
        parent::__construct();
        $this->table = self::MENU_TABLE;
    }

    public function wechat()
    {
        $config = [
            'app_id' => WECHAT_APPID,
            'secret' => WECHAT_TOKEN,

            'response_type' => 'array',

            'log' => [
                'level' => 'debug',
                'file' => '/var/log/nginx/wechat.log',
            ],
        ];
        $app = Factory::officialAccount($config);
        $response = $app->server->serve();
        return $response;
    }
}