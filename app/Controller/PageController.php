<?php
use Zero\Controller;
use Model\CommonModel;
use Model\MenuModel;
use Model\UserModel;

class PageController extends Controller
{

    public function __construct() 
    {
        parent::__construct();
    }
    
    public function indexZero()
    {
        $this->render('Index', []);
    }

    public function loginZero()
    {
        $this->render('Login', []);
    }

    public function menuZero()
    {
        $menuModel = new MenuModel();
        $menuList = $menuModel->listMenu();
        $this->render('Menu', ['lists' => $menuList]);
    }

    public function UserZero()
    {
        $userModel = new UserModel();
        $userList = $userModel->listUser();
        $this->render('User', ['lists' => $userList]);
    }

    public function newsZero()
    {
        $this->render('News', []);
    }

    public function apiZero()
    {
        $this->render('Api', []);
    }

    public function qrcodeZero()
    {
        $this->render('Qrcode', []);
    }
}