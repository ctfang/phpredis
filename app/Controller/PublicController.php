<?php
/**
 * Created by PhpStorm.
 * User: chenyuanzhao
 * Date: 2017/3/26
 * Time: 下午2:06
 */

namespace App\Controller;


use App\Redis;

class PublicController
{
    public function index()
    {
        return Redis::set('test',time());
        return Redis::get('test');
    }
}