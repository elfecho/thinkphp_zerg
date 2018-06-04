<?php
/**
 * Created by PhpStorm.
 * User: junhao
 * Date: 2018/5/23
 * Time: 21:38
 */

namespace app\sample\controller;

use think\Request;

class Test
{
    public function hello(Request $requset)
    {
//        $all = Request::instance()->route();
        $all = $requset->route();
//        $all = input('param.age');
        var_dump($all);
//        $name = Request::instance()->param('name');
//        $age = Request::instance()->param('age');
//        echo $id.'|'.$name.'|'.$age;
//        return 'hello, qiyue';
    }
}