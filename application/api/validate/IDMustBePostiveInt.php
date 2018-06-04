<?php
/**
 * Created by PhpStorm.
 * User: junhao
 * Date: 2018/5/28
 * Time: 22:44
 */

namespace app\api\validate;

class IDMustBePostiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveteger'
    ];

    protected function isPositiveteger($value, $rule = '', $data = '', $field = '')
    {
        if(is_numeric($value) && is_int($value+0) && ($value + 0)>0){
            return true;
        }
        else {
            return $field."必须是正整数";
        }
    }
}