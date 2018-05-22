<?php

namespace Model;

use Zero\Model;

class MenuModel extends Model
{
    const MENU_TABLE = '`zero_menu`';

    public function __construct() 
    {
        parent::__construct();
        $this->table = self::MENU_TABLE;
    }

    public function createMenu($value)
    {
        $this->feild = '`name`, `pid`, `created`, `updated`';
        $this->value = $value;
        $lastId =  $this->C();
        return $lastId;
    }

    public function updateMenu($upval, $where)
    {
        $this->upval = $upval;
        $this->where = $where;
        $rs =  $this->U();
        return $rs;
    }
    
    public function listMenu()
    {
        $fatherMenuList = $this->searchTable(self::MENU_TABLE, '`id`,`name`,`wechat_status`', '`pid`=0');
        $menuList = $this->searchTable(self::MENU_TABLE, '`id`,`pid`,`name`,`wechat_status`');
        $list = ['father_list' => $fatherMenuList, 'list' => $menuList];
        return $list;
    }

    public function deleteMenu($id)
    {
        $this->id = $id;
        $rs = $this->D();
        return $rs;
    }
}