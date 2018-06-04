<?php
/**
 * Created by PhpStorm.
 * User: junhao
 * Date: 2018/5/27
 * Time: 23:37
 */

namespace app\api\controller\v1;

use app\api\model\Banner as BannerModel;
use app\api\validate\IDMustBePostiveInt;
use app\lib\exception\BannerMissException;
use think\Exception;
use think\Loader;

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
        //        AOP 面向切面编程
        (new IDMustBePostiveInt())->goCheck(); // 拦截器
        // get,find,all,slect 查询数据库
        // Db是模型的基石，两者是不能分离的
        $banner = BannerModel::getBannerByID($id);
        if (!$banner) {
            throw new BannerMissException();
            //            throw new Exception('內部錯誤');
        }
        return $banner;
//
//        return json($banner, 200);

    }
}