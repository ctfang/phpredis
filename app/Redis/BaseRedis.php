<?php
/**
 * Created by PhpStorm.
 * User: chenyuanzhao
 * Date: 2017/3/27
 * Time: 上午9:48
 */

namespace App\Redis;


class BaseRedis
{
    private static $client;

    public static function __callStatic($name, $arguments)
    {
        return call_user_func_array([redis(),$name],$arguments);
    }

    /**
     * 初始化,l链接
     */
    public static function getClient()
    {
        if(!isset(self::$client)){
            self::$client = new \Predis\Client();
        }
        return self::$client;
    }
}