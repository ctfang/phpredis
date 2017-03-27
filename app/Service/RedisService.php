<?php
/**
 * Created by PhpStorm.
 * User: chenyuanzhao
 * Date: 2017/3/27
 * Time: 下午1:02
 */

namespace App\Service;


use App\Redis;
use system\Cache;

class RedisService
{
    /**
     * 获取数据库列表
     */
    public function getDatabaseList()
    {
        $cacheKey = __FILE__;
        if( $data = Cache::get($cacheKey) ){
            return $data;
        }
        $arr = Redis::config('GET','databases');
        for($i=0;$i<$arr['databases'];$i++){
            $databaseList[$i] = $i;
        }
        Cache::set($cacheKey,$databaseList,10);
        return $databaseList;
    }
}