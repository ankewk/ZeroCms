<?php

namespace Model;

use Zero\Model;

class MenuModel extends Model
{
    const MENU_TABLE = '`zero_menu`';
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
    
    public function listMenu()
    {
        $fatherMenuList = $this->searchTable(self::MENU_TABLE, '`id`,`name`,`wechat_status`', '`pid`=0');
        $menuList = $this->searchTable(self::MENU_TABLE, '`id`,`pid`,`name`,`wechat_status`');
        $list = ['father_list' => $fatherMenuList, 'list' => $menuList];
        return $list;
    }

    private function validate($obj)
    {
        return (array )$obj;
    }
}