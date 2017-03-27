<?php
/**
 * Created by PhpStorm.
 * User: chenyuanzhao
 * Date: 2017/3/27
 * Time: 下午1:02
 */

namespace App\Service;


use App\Redis;

class RedisService
{
    /**
     * 获取数据库列表
     */
    public function getDatabaseList()
    {
        $arr = Redis::config('GET','databases');
        for($i=0;$i<$arr['databases'];$i++){
            $databaseList[$i] = $i;
        }
        return $databaseList;
    }
}