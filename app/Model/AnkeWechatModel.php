<?php

namespace Model;

use Zero\Model;
use EasyWeChat\Factory;

class AnkeWechatModel extends Model
{
    const MENU_TABLE = '`zero_api`';
    
    public function __construct() 
    {
        parent::__construct();
        $this->table = self::MENU_TABLE;
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

}