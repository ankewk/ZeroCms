<?php
use Zero\Controller;
use Model\CommonModel;
use Model\UserModel;

class UserController extends Controller
{
    private $userModel;

    public function __construct() 
    {
        parent::__construct();
        $this->userModel = new UserModel();
    }

    public function loginZero()
    {      
        $user = new \StdClass();
        $user->name = $_POST['name'];
        $user->password = $_POST['password'];
        $userLoginStatus = $this->userModel->loginUser($user);
        $this->dataPrint($userLoginStatus);
    }

    public function logoutZero()
    {
        $this->userModel->logoutUser();
        $this->redirect('/login');
    }

}