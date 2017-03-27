<?php
/**
 * Created by PhpStorm.
 * User: chenyuanzhao
 * Date: 2017/3/27
 * Time: 上午10:12
 */

namespace App\Controller;


use App\Service\RedisService;

class RedisController
{
    public function database()
    {
        $arrData = (new RedisService())->getDatabaseList();
        return $arrData;
    }
}