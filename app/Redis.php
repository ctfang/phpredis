<?php
/**
 * Created by PhpStorm.
 * User: chenyuanzhao
 * Date: 2017/3/26
 * Time: 下午5:36
 */

namespace App;



class Redis
{
    private static $client;

    public static function __callStatic($name, $arguments)
    {
        return call_user_func_array([self::$client,$name],$arguments);
    }

    /**
     * 初始化
     */
    public static function setClient()
    {
        self::$client = new \Predis\Client();
    }

    /**
     * 设置和更新一个简直对
     *
     * @param $prefix
     * @param $paths
     */
    public static function set($prefix, $paths)
    {
        self::$client->set($prefix, $paths);
    }

    /**
     * 获取
     *
     * @param $prefix
     * @return mixed
     */
    public static function get($prefix)
    {
        return self::$client->get($prefix);
    }

    /**
     * 发送原始命令
     */
    public static function executeRaw(...$cod)
    {
        return self::$client->executeRaw($cod);
    }

    public static function keys($keys)
    {
        return self::$client->keys($keys);
    }
}