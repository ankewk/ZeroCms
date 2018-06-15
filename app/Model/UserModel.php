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
        $this->setUserStatus();
        return ['status' => 10, 'msg' => '登陆成功！'];
    }

    public function logoutUser()
    {
        $this->delUserStatus();
        return true;
    }

    public function isUserLogin()
    {
        if($this->getUserStatus()) 
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

    public function setUserStatus()
    {
        if(USER_MODE == 'SESSION')
            $this->setSession('_user', USER_LOGIN_STR, USER_EXPIRE);
        if(USER_MODE == 'COOKIE')
            setcookie("_user", $value, time()+USER_EXPIRE); 
    }

    public function getUserStatus()
    {
        if(USER_MODE == 'SESSION')
            return $this->getSession('_user');
    }

    public function delUserStatus()
    {
        if(USER_MODE == 'SESSION')
            unset($_SESSION['_user']);
    }

    public function setSession($name, $data, $expire)
    {  
        $session_data = [];  
        $session_data['data'] = $data;  
        $session_data['expire'] = time()+$expire;  
        $_SESSION[$name] = $session_data;  
    }  
  
    public function getSession($name)
    {  
        if(isset($_SESSION[$name])){  
            if($_SESSION[$name]['expire']>time()){  
                return $_SESSION[$name]['data'];  
            }else{  
                unset($_SESSION[$name]);  
            }  
        }  
        return false;  
    }  
   
}