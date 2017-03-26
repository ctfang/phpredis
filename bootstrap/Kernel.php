<?php
/**
 * Created by PhpStorm.
 * User: chenyuanzhao
 * Date: 2017/3/26
 * Time: 上午11:56
 */

namespace system;



class Kernel
{

    public function handle($request)
    {

        $response   = Response::getInstance();
        $route      = Route::get($request->getRoute());
        // 执行中间件
        $response   = $this->runMiddleware($route,$response);
        $arr        = explode('@',$route['action']);
        $controler  = "\\App\\Controller\\{$arr[0]}";
        $function   = $arr[1];
        $response->data = (new $controler())->$function();
        return $response;
    }

    /**
     * 执行中间件
     */
    public function runMiddleware($route,$response)
    {
        foreach ($route['middleware'] as $class){
            $class      = "\\App\\Middleware\\$class";
            if(class_exists($class)){
                $middleware = new $class();
                $response   = $middleware->handle($response);
            }else{
                return new \Exception("中间件不存在");
            }
        }
        return $response;
    }

    public function terminate($request, $response)
    {

    }
}