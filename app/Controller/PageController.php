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
        $this->pageLoad();
        $this->render('Index', []);
    }

    public function loginZero()
    {
        $this->render('login', []);
    }

    public function menuZero()
    {
        $this->pageLoad();
        $menuModel = new MenuModel();
        $menuList = $menuModel->listMenu();
        $this->render('Menu', ['lists' => $menuList]);
    }

    public function UserZero()
    {
        $this->pageLoad();
        $userModel = new UserModel();
        $userList = $userModel->listUser();
        $this->render('User', ['lists' => $userList]);
    }

    public function newsZero()
    {
        $this->pageLoad();
        $this->render('News', []);
    }

    public function apiZero()
    {
        $this->pageLoad();
        $this->render('Api', []);
    }

    public function qrcodeZero()
    {
        $this->pageLoad();
        $this->render('Qrcode', []);
    }

    public function pageLoad()
    {
        $userModel = new UserModel();
        if(!$userModel->isUserLogin()) {
            $this->redirect('/login');
        }
    }
}