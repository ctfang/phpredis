<?php
/**
 * Created by PhpStorm.
 * User: chenyuanzhao
 * Date: 2017/3/26
 * Time: 下午5:31
 */

namespace App\Controller;


use App\Redis;

class HomeController
{
    public function index()
    {
        Redis::set('test',time());
        $return = Redis::executeRaw('KEYS','*');
        //return Redis::get('test');
        return $return;
    }
}