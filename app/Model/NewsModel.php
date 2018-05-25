<?php

namespace Model;

use Zero\Model;

class NewsModel extends Model
{
    const MENU_TABLE = '`zero_callback`';
    
    public function __construct() 
    {
        parent::__construct();
        $this->table = self::MENU_TABLE;
    }

    // Wehcat Auto Back message 
    public function createAutoMsg()
    {
        
    }
}