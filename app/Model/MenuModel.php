<?php

namespace Model;

use Zero\Model;

class MenuModel extends Model
{
    // Model Table
    const MENU_TABLE = '`zero_menu`';

    public function __construct() 
    {
        parent::__construct();
        $this->table = self::MENU_TABLE;
    }

    // Create Menu 
    public function createMenu($value)
    {
        $this->feild = '`name`, `pid`, `created`, `updated`';
        $this->value = $value;
        $lastId = $this->C();
        return $lastId;
    }

    // Update Menu
    public function updateMenu($upval, $where)
    {
        $this->upval = $upval;
        $this->where = $where;
        $rs = $this->U();
        return $rs;
    }
    
    // Read Menu List
    public function listMenu()
    {
        $this->feild = '`id`,`name`,`wechat_status`';
        $this->where = '`pid`=0';
        $fatherMenuList = $this->R();
        $this->feild = '`id`,`pid`,`name`,`wechat_status`';
        $this->where = 1;
        $menuList = $this->R();
        $list = ['father_list' => $fatherMenuList, 'list' => $menuList];
        return $list;
    }

    // Delete Menu
    public function deleteMenu($id)
    {
        $this->id = $id;
        $rs = $this->D();
        return $rs;
    }
}