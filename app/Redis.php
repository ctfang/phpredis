<?php
/**
 * Created by PhpStorm.
 * User: chenyuanzhao
 * Date: 2017/3/26
 * Time: 下午5:36
 */

namespace App;



use App\Redis\BaseRedis;

class Redis extends BaseRedis
{
    /**
     * 设置和更新一个简直对
     *
     * @param $prefix
     * @param $paths
     */
    public static function set($prefix, $paths)
    {
        redis()->set($prefix, $paths);
    }

    /**
     * 获取
     *
     * @param $prefix
     * @return mixed
     */
    public static function get($prefix)
    {
        return redis()->get($prefix);
    }

    /**
     * 发送原始命令
     */
    public static function executeRaw(...$cod)
    {
        return redis()->executeRaw($cod);
    }

    public static function execute($string)
    {
        $arr = explode(' ',$string);
        return call_user_func_array([redis(),'executeRaw'],[$arr]);
    }

    public static function keys($keys)
    {
        return redis()->keys($keys);
    }
}