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
        $param = [
            'name' => 'string',
            'pid' => 'string',
            'type' => 'string',
            'content' => 'string'
        ];
        $request = $this->Request();
        $request->validation($param);
        $name = $request->getParam('name');
        $pid = $request->getParam('pid');
        $type = $request->getParam('type');
        $content = $request->getParam('content');
        $now = NOW_TIME;
        $menuVal = "'{$name}', {$pid}, '{$type}', '{$content}', '{$now}', '{$now}'";
        $lastId = $this->menuModel->createMenu($menuVal);
        if($lastId)
            $this->statusPrint(10, '菜单创建成功！');
        $this->statusPrint(101, '菜单创建失败！');
    }

    public function updateMenuZero()
    {
        $param = [
            'id' => 'string',
            'name' => 'string',
            'pid' => 'string',
            'type' => 'string',
            'content' => 'string'
        ];
        $request = $this->Request();
        $request->validation($param);
        $menuId = $request->getParam('id');
        $name = $request->getParam('name');
        $pid = $request->getParam('pid');
        $type = $request->getParam('type');
        $content = $request->getParam('content');
        $upval = "`name`='{$name}', `pid`={$pid}, `type`='{$type}', `content`='{$content}' ";
        $where  = "`id`={$menuId}";
        $rs =  $this->menuModel->updateMenu($upval, $where);
        if($rs)
            $this->statusPrint(10, '菜单修改成功！');
        $this->statusPrint(101, '菜单修改失败！');
    }

    public function deleteMenuZero()
    {
        $param = [
            'id' => 'string'
        ];
        $request = $this->Request();
        $request->validation($param);
        $menuId = $request->getParam('id');
        $rs = $this->menuModel->deleteMenu($menuId);
        if($rs)
            $this->statusPrint(10, '菜单删除成功！');
        $this->statusPrint(101, '菜单删除失败！');
    }
}