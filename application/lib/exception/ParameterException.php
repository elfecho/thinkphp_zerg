<?php
/**
 * Created by PhpStorm.
 * User: junhao
 * Date: 2018/5/30
 * Time: 0:38
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
    public $code = 400;
    public $msg = '參數錯誤';
    public $errorCode = 10000;
}