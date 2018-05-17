<?php
use Zero\Controller;
use Model\CommonModel;
use Model\MenuModel;

class MenuController extends Controller
{
    public function __construct() 
    {
        parent::__construct();
    }

    public function creatMenuZero()
    {      
        if(empty($_POST['name']))
            $this->statusPrint(101, '名称必选！');
        $menuData = new \StdClass();
        $menuData->name = $_POST['name'];
        $menuData->pid = $_POST['pid'];
        $menuData->created = NOW_TIME;
        $menuData->updated = NOW_TIME;
        $menuModel = new MenuModel();
        $menuCreateStatus = $menuModel->createMenu($menuData);
        $this->dataPrint($menuCreateStatus);
    }

    public function updateMenuZero()
    {
        echo 'update menu';exit;
    }

    public function deleteMenuZero()
    {
        echo 'delete menu';exit;
    }
}