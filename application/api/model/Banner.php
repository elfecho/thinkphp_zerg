<?php
/**
 * Created by PhpStorm.
 * User: junhao
 * Date: 2018/5/29
 * Time: 19:19
 */

namespace app\api\model;

use think\Db;
use think\Model;

class Banner extends BaseModel
{
    protected $hidden = ['update_time','delete_time'];
//    protected $table = 'category';
    public function items(){
        return $this->hasMany('BannerItem','banner_id','id');
    }
    public static function getBannerByID($id)
    {
        $banner = self::with(['items','items.img'])->find($id);
        return $banner;
    }
}   