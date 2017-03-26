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

function basePath($path='')
{
    return dirname(__DIR__).'/'.$path;
}

function p(...$params)
{
    foreach ($params as $arr){
        echo '<xmp>';
        print_r($arr);
        echo '</xmp>';
    }
}