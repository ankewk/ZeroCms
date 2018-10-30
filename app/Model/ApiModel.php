<?php

namespace Model;

use Zero\Model;
use Lib\ZeroWechat;

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
        return $this->zeroWechat->wechat($tmp,$signature);
    }

    public function getAccessToken()
    {
        return $this->zeroWechat->getAccessToken();
    }
}