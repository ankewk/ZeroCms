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
        $param = [
            'name' => 'string',
            'password' => 'string'
        ];
        $request = $this->Request();
        $request->validation($param);  
        $user = new \StdClass();
        $user->name = $request->getParam('name');
        $user->password = $request->getParam('password');
        $userLoginStatus = $this->userModel->loginUser($user);
        $this->dataPrint($userLoginStatus);
    }

    public function logoutZero()
    {
        $this->userModel->logoutUser();
        $this->redirect('/login');
    }
}