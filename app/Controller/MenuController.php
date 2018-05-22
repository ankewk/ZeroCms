<?php
use Zero\Controller;
use Model\CommonModel;
use Model\MenuModel;

class MenuController extends Controller
{
    private $menuModel;

    public function __construct() 
    {
        parent::__construct();
        $this->menuModel = new MenuModel();
    }

    public function creatMenuZero()
    {      
        if(empty($_POST['name']))
            $this->statusPrint(101, '名称必填！');
        $now = NOW_TIME;
        $menuVal = "'{$_POST['name']}', {$_POST['pid']}, '{$now}', '{$now}'";
        $lastId = $this->menuModel->createMenu($menuVal);
        if($lastId)
            $this->statusPrint(10, '菜单创建成功！');
        $this->statusPrint(101, '菜单创建失败！');
    }

    public function updateMenuZero()
    {
        $menuId = isset($_POST['id']) ? $_POST['id'] : 0;
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $pid = isset($_POST['pid']) ? $_POST['pid'] : 0;
        $upval = "`name`='{$name}', `pid`={$pid}";
        $where  = "`id`={$menuId}";
        $rs =  $this->menuModel->updateMenu($upval, $where);
        if($rs)
            $this->statusPrint(10, '菜单修改成功！');
        $this->statusPrint(101, '菜单修改失败！');
    }

    public function deleteMenuZero()
    {
        $menuId = isset($_POST['id']) ? $_POST['id'] : 0;
        $rs = $this->menuModel->deleteMenu($menuId);
        if($rs)
            $this->statusPrint(10, '菜单删除成功！');
        $this->statusPrint(101, '菜单删除失败！');
    }
}