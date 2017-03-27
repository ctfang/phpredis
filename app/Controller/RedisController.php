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
    /**
     * 数据库列表
     *
     * @return mixed
     */
    public function database()
    {
        $arrData = (new RedisService())->getDatabaseList();
        return $arrData;
    }

    /**
     * 数据类型列表
     */
    public function typeList()
    {

    }

}