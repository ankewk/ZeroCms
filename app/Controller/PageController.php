<?php
use Zero\Controller;
use Model\CommonModel;

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
        $this->render('Menu', []);
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