<?php

namespace Model;

use Zero\Model;

class UserModel extends Model
{
    const USER_TABLE = '`zero_user`';

    public function __construct() 
    {
        parent::__construct();
        $this->table = self::USER_TABLE;
    }

    public function loginUser($user)
    {
        if($user->name != 'admin' && $user->password != '123456')
            return ['status' => 100, 'msg' => '用户名或者密码错误！'];
        $_SESSION['_user'] = USER_LOGIN_STR;
        return ['status' => 10, 'msg' => '登陆成功！'];
    }

    public function logoutUser()
    {
        unset($_SESSION['_user']);
        return true;
    }

    public function isUserLogin()
    {
        if(isset($_SESSION['_user'])) 
            return true;
        return false;
    }

    public function listUser()
    {
        $this->feild = "`id`, `openid`, `nickname`, `sex`, `headimgurl`, `subscribe` ";
        $this->where = 1;
        $userList = $this->R();
        return $userList;
    }

}