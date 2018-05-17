<?php
use Zero\Controller;
use Model\CommonModel;
use Model\MenuModel;

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
        $this->render('User', []);
    }

    public function newsZero()
    {
        $this->render('News', []);
    }

    public function apiZero()
    {
        $this->render('Api', []);
    }
}