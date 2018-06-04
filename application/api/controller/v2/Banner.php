<?php
/**
 * Created by PhpStorm.
 * User: junhao
 * Date: 2018/5/27
 * Time: 23:37
 */

namespace app\api\controller\v2;


use think\Exception;

class Banner
{
    /*
     * 获取指定id
     * @url /banner/:id
     * @http GER
     * @id banner的id号
     *
     * */
    public function getBanner($id)
    {
        return 'This is v2 version';

    }
}