<?php
use Zero\Controller;
use Model\CommonModel;

class APIController extends Controller
{

    public function __construct() 
    {
        parent::__construct();
    }

    public function getAccessTokenZero()
    {
        echo "获取accesstoken";exit;
    }
}