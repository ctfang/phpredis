<?php

/**
 * 请求实例
 *
 * @return \system\Request
 */
function request()
{
    return \system\Request::capture();
}

/**
 * 基础路径
 *
 * @param string $path
 * @return string
 */
function basePath($path='')
{
    return dirname(__DIR__) .'/'.$path;
}

/**
 * 获取redis实例
 */
function redis()
{
    return \App\Redis::getClient();
}
/**
 * @param array ...$params
 */
function p(...$params)
{
    foreach ($params as $arr){
        echo '<xmp>';
        print_r($arr);
        echo '</xmp>';
    }
}