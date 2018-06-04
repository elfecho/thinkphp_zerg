<?php
/**
 * Created by PhpStorm.
 * User: junhao
 * Date: 2018/5/28
 * Time: 21:59
 */

namespace app\api\validate;

use think\Validate;

class Testvalidate extends Validate
{
    protected $rule = [
        'name'  =>  'require|max:10',
        'email' =>  'email',
    ];

}