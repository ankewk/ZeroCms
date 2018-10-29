<?php
namespace Lib;

class EasyApi
{
    public static $url;
    public static $param;
    public static $method;
    public static $curl;

    public function __construct()
    {
        
    }

    public static function init($url,$param,$method)
    {
        self::$url = $url;
        self::$param = $param;
        self::$method = $method;
    }
    private static function curlInit()
    {
        self::$curl = curl_init();
        curl_setopt(self::$curl, CURLOPT_URL, self::$url);
        curl_setopt(self::$curl, CURLOPT_HEADER, 1);
        curl_setopt(self::$curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt(self::$curl, CURLOPT_REFERER, '223.73.212.174');
        if(self::$method == 'post')
            curl_setopt(self::$curl, CURLOPT_POST, 1);
    } 

    private static function curlClose()
    {
        curl_close(self::$curl);
    }

    public static function post()
    {
        self::curlInit();
        curl_setopt(self::$curl, CURLOPT_POSTFIELDS, self::$param);
        $response = curl_exec(self::$curl);
        self::curlClose();
        return response;
    }

    public static function get()
    {
        self::curlInit();
        $response = curl_exec(self::$curl);
        var_dump(curl_error(self::$curl));
        self::curlClose();
        return $response;
    }

    public static function delete()
    {

    }

    public function __destruct()
    {
    
    }
}