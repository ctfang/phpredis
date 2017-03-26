<?php
/**
 * Created by PhpStorm.
 * User: chenyuanzhao
 * Date: 2017/3/26
 * Time: 下午4:55
 */

namespace system;


class Config
{
    private static $_config;

    public static function get($key)
    {
        if(strpos($key,'.')!==false){
            $arr  = explode('.',$key);
            $file = $arr[0];
            $key  = $arr[1];
        }else{
            $file = 'config';
        }


        if(!isset(self::$_config[$file])){
            self::$_config[$file] = include_once basePath("config/{$file}.php");
        }
        return self::$_config[$file][$key];
    }
}