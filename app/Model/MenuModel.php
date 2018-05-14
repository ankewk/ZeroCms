<?php

namespace Model;

use Zero\Model;
use Zero\DB;

class MenuModel extends Model
{
    const MENU_TABLE = 'zero_menu';
    public function __construct() 
    {
        parent::__construct();
    }

    public function createMenu($data)
    {
        $menuData = $this->validate($data);
        $rs = $this->insertTable(self::MENU_TABLE, $menuData);  
        if($rs)
            return ['status' => 10, 'msg' => '菜单创建成功！'];
        return ['status' => 100, 'msg' => '菜单创建失败！'];
    }

    private function validate($obj)
    {
        return (array )$obj;
    }
}