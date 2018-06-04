<?php
/**
 * Created by PhpStorm.
 * User: junhao
 * Date: 2018/5/29
 * Time: 22:12
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
    public $code = 404;
    public $msg = '请求的Banner不存在';
    public $errorCode = 40000;
}